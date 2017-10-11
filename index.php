<?php 
namespace dds{
    class PDO
    {
        public static function test()
        {
            echo 'dds中的PDO类';
        }
    }

    const DD1 = '大屌丝';

    echo DD1.'<br>';
    PDO::test();
	echo 1234;
    echo '<hr>';
}




namespace hds{
    class PDO
    {
        public static function test()
        {
            echo 'hds中的PDO类';
        }
    }

    const DD1 = '老屌丝';

    echo DD1.'<br>';
    PDO::test();

    echo '<hr>';
    // echo \dds\DD1;
    \dds\PDO::test();
}


namespace {
    echo '<hr>';
    echo '本命名空间的名字: '.__NAMESPACE__;
    $a = 200;
    echo $a;
}

