    $ ./doinflect.php noun 1 "$(echo пачка абрикосов | base64)"
    пачке абрикосов
    $ ./doinflect.php noun 2 "$(echo пачка абрикосов | base64)"
    пачку абрикосов
    $ echo 'пачка абрикосов' | ./doinflect.php noun 1
    пачке абрикосов
    $ echo 'пачка абрикосов' | ./doinflect.php noun 2
    пачку абрикосов
