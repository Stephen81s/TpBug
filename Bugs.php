<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
	<meta charset="utf-8" />
</head>
<body>
    <?php
    class bug{
        public $id;
        public $description;
        
        public function __construct($id, $description) {
            $this->id = $id;
            $this->description = $description;
        }

        
  public function getId(){
      return $this ->id;
    }
    
    //getteurs and setteurs
  public  function getDescription() {
        return $this->description;
    }

  public  function setDescription($description) {
        $this->description = $description;
    }

    
    
    
  }
    
    ?>
</body>
</html>
