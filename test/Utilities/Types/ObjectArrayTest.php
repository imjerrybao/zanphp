<?php
/**
 * Created by IntelliJ IDEA.
 * User: winglechen
 * Date: 15/12/13
 * Time: 20:10
 */

namespace Zan\Framework\Test\Utilities\Types;

use Zan\Framework\Utilities\Types\ObjectArray;

require __DIR__ . '/../../../' . 'src/Test.php';

class ObjectArrayTest extends \UnitTest {

    private $arrayObject = null;

    public function testArrayObjectWork()
    {
        $this->arrayObject = new ObjectArray();
        $o1 = new UserTest();
        $o2 = new UserTest();
        $o3 = new UserTest();

        $this->arrayObject->push($o1);
        $this->arrayObject->push($o2);
        $this->arrayObject->push($o3);

        //$ret = $this->arrayObject->pop();
        //var_dump($ret);

        //$this->arrayObject->remove($ret);
        $length = $this->arrayObject->length();
        for ($i =0; $i<$length; $i++) {
            $ret = $this->arrayObject->pop();
            var_dump($ret);

        }

    }

}