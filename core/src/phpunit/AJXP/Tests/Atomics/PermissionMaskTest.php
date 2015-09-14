<?php
/**
 * Created by PhpStorm.
 * User: charles
 * Date: 12/09/2015
 * Time: 10:42
 */

namespace AJXP\Tests\Atomics;


class AJXP_PermissionMaskTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param \AJXP_Permission $permission
     */
    protected function isRW($permission){
        $this->assertTrue($permission->canRead());
        $this->assertTrue($permission->canWrite());
        $this->assertFalse($permission->denies());
    }

    /**
     * @param \AJXP_Permission $permission
     */
    protected function isReadonly($permission){
        $this->assertTrue($permission->canRead());
        $this->assertFalse($permission->canWrite());
        $this->assertFalse($permission->denies());
    }

    /**
     * @param \AJXP_Permission $permission
     */
    protected function isWriteonly($permission){

        $this->assertFalse($permission->canRead());
        $this->assertTrue($permission->canWrite());
        $this->assertFalse($permission->denies());

    }

    /**
     * @param \AJXP_Permission $permission
     */
    protected function isDenied($permission){

        $this->assertTrue($permission->denies());
        $this->assertFalse($permission->canRead());
        $this->assertFalse($permission->canWrite());

    }


    public function testSimplePermission(){

        $perm = new \AJXP_Permission();
        $this->isDenied($perm);

        $perm->setRead();
        $this->isReadonly($perm);
        $perm->setWrite();
        $this->isRW($perm);
        $perm->setDeny();
        $this->isDenied($perm);

        $perm->setDeny(false);

        // When perm is empty, => denied by default
        $this->isDenied($perm);
        $perm->setRead();
        $perm->setRead(false);
        $this->isDenied($perm);
        $perm->setWrite();
        $perm->setWrite(false);
        $this->isDenied($perm);

    }


    public function testPermissionOverride(){

        $readonly = new \AJXP_Permission("r");
        $writeonly = new \AJXP_Permission("w");
        $readwrite = new \AJXP_Permission("rw");
        $deny = new \AJXP_Permission("d");
        $empty = new \AJXP_Permission();

        $this->isRW($writeonly->override($readonly));
        $this->isRW($readonly->override($writeonly));
        $this->isRW($readwrite->override($readonly));
        $this->isRW($readwrite->override($writeonly));
        $this->isRW($readonly->override($readwrite));
        $this->isRW($writeonly->override($readwrite));

        $this->isDenied($deny->override($readonly));
        $this->isDenied($deny->override($writeonly));
        $this->isDenied($deny->override($readwrite));

        $this->isDenied($empty->override($readonly));
        $this->isDenied($empty->override($writeonly));
        $this->isDenied($empty->override($readwrite));

    }

    public function testPermissionMask(){

        $mask = new \AJXP_PermissionMask();
        $mask->updateBranch("/a1/b1/c1", new \AJXP_Permission("r"));
        $mask->updateBranch("/a1/b1/c2", new \AJXP_Permission("rw"));
        $mask->updateBranch("/a1/b2", new \AJXP_Permission("rw"));
        $mask->updateBranch("/a1/b3", new \AJXP_Permission());

        $this->assertFalse($mask->match("/", \AJXP_Permission::WRITE));
        $this->assertTrue($mask->match("/", \AJXP_Permission::READ));
        $this->assertTrue($mask->match("/a1/b1/c1", \AJXP_Permission::READ));
        $this->assertTrue($mask->match("/a1/b1", \AJXP_Permission::READ));
        $this->assertFalse($mask->match("/a1/b1", \AJXP_Permission::WRITE));

        $this->assertFalse($mask->match("/a1/b1/c3", \AJXP_Permission::READ));
        $this->assertTrue($mask->match("/a1/b1/c1/d1/e1/f1", \AJXP_Permission::READ));
        $this->assertFalse($mask->match("/a1/b1/c1/d1/e1/f1", \AJXP_Permission::WRITE));

        // This overrides the whole /a1/b1 branch >> do we want that?
        $mask->updateBranch("/a1/b1", new \AJXP_Permission("rw"));
        $this->assertTrue($mask->match("/a1/b1", \AJXP_Permission::WRITE));
        // Todo write more tests
    }
}
