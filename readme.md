iSlim
=======

I call this "iSlim" because I heart [Slim Framework](http://www.slimframework.com/).<br>
iSlim is the easiest and flexible way to create your PHP application using a MVC pattern and Bootstrap 4.<br>
Why iSlim use Slim version 2.x? Because this is for someone who still want to run Slim MVC in PHP 5.3.

Status Development
---------------
Now still alpha.


Getting Started
---------------
1. Get or download the project
2. Install it using Composer

Folder System
---------------
* lib/
    * Config.php (Class to store with config variables)
    * Core.php (Singleton PDO connection to the DB)   
* models/
* public/
* routers/
	* name.router.php (routes by functionalities)
* templates/

### lib/

Here we have the core classes of the connection with the DB

### models/

Add the model classes here.
We are using PDO MySQL for the Database.

Example of class:

Starter.php

```php

namespace models;
use lib\Core;
use PDO;

class Starter {

    protected $core;

    function __construct() {
        $this->core = \lib\Core::getInstance();
    }

    // Get all data from database mysql
	public function getAll() {
		$r = array();		

		$sql = "SELECT * FROM user";
		$stmt = $this->core->dbh->prepare($sql);		

		if ($stmt->execute()) {
			$r = $stmt->fetchAll(PDO::FETCH_ASSOC);		   	
		} else {
			$r = 0;
		}		
		return $r;
	}

    public function set() {
        return array(
			'hello' => "Hello World!!!",
			'description1' => "Use this document as a way to quickly start any new project.",
			'description2' => "All you get is this text and a mostly barebones HTML document.",
			'author' => "iSlim is forged by M ABD AZIZ ALFIAN"
			);
    }
}
```

### public/

All the public files:
* Images, CSS and JS files
* index.php

### routers/

All the files with the routes. Each file contents the routes of an specific functionality.
It is very important that the names of the files inside this folder follow this pattern: name.router.php

Example of router file:

index.router.php

```php
// GET example index route
$app->get('/', function () use ($app) {
    $oStuff = new models\Starter();
    $hello = $oStuff->set();
    $app->render('frontend/index.html', array(
        'hello' => $hello['hello'],
        'description1' => $hello['description1'],
        'description2' => $hello['description2'],
        'author' => $hello['author']
    ));
});

//Create user
$app->post('/user', function () use ($app) {
    echo 'This is a POST route';
});

// PUT route
$app->put('/user', function () {
    echo 'This is a PUT route';
});

// DELETE route
$app->delete('/user', function () {
    echo 'This is a DELETE route';
});
```

### templates/

All the Twig templates.

How to Contribute
-----------------
### Pull Requests

1. Fork the iSlim repository
2. Create a new branch for each feature or improvement
3. Send a pull request from each feature branch to the develop branch