<?PHP
require 'vendor/autoload.php';

$app = new \atk4\ui\App('Registration');
$layout = $app->initLayout('Centered');

        if (isset($_ENV['CLEARDB_DATABASE_URL'])) {
            // we are on Heroku
            preg_match('|([a-z]+)://([^:]*)(:(.*))?@([A-Za-z0-9\.-]*)(/([0-9a-zA-Z_/\.]*))|',
                $_ENV['CLEARDB_DATABASE_URL'],$matches);

            $dsn=array(
                $matches[1].':host='.$matches[5].';dbname='.$matches[7],
                $matches[2],
                $matches[4]
            );
            $db = new \atk4\data\Persistence_SQL($dsn[0], $dsn[1], $dsn[2]);
        } else {
            // Not on Heroku
$db = new
<<<<<<< HEAD
\atk4\data\Persistence_SQL('mysql:dbname=lending;host=localhost','root','');
=======
\atk4\data\Persistence_SQL('mysql:dbname=lending;host=localhost','root','');
        }


$layout->leftMenu->addItem(['VK','icon'=>'vk']);
>>>>>>> 7f360b4c2cadeaa2fdd8d886621ebac58de0bd19
