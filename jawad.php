<?php 

$ii= strtoupper($_POST["i"]);



Class name {
    public $name;
    public $comfortsize ;
    public $bedsheetsize ;
    public $pillowsize; 
    public $comfortnum;
    public $bedsheetnum;
    public $pillownum;

    function __construct($xname,$comnum,$bednum,$pillnum,$comsize,$bedsize,$pillsize){
        $this->name=$xname ;
        $this->comfortnum=$comnum;
        $this->comfortsize=$comsize ;
        $this->bedsheetsize=$bedsize;
        $this->bedsheetnum=$bednum;
        $this->pillowsize=$pillsize;
        $this->pillownum=$pillnum;
    }
    function Search($i){
        if ($i = $this->name){
            echo "<h1>$this->name</h1>";
            echo "<br>";
            echo "<h2>$this->comfortnum PC Comforterrible $this->comfortsize";
            echo "<h2>$this->bedsheetnum PC Comforterrible $this->bedsheetsize";
            echo "<h2>$this->pillownum PC Comforterrible $this->pillowsize";
            echo "<br>";
            echo "<br>";

        }else{
            echo "pdfghjkkkkkkkkkk valid name";
        }
    }
}


Class xname extends name{
    public $xbedsheetsize;
    public $xbedsheetnum;

    function __construct($xname,$comnum,$bednum,$pillnum,$comsize,$bedsize,$pillsize,$xbednum,$xbedsize){
        $this->name=$xname ;
        $this->comfortnum=$comnum;
        $this->comfortsize=$comsize ;
        $this->bedsheetsize=$bedsize;
        $this->bedsheetnum=$bednum;
        $this->pillowsize=$pillsize; 
        $this->pillownum=$pillnum;
        $this->xbedsheetsize=$xbedsize;
        $this->xbedsheetnum=$xbednum;
        


    }
    
    function Xsearch($i){
        if ($i = $this->name){
            echo "<h1>$this->name</h1>";
            echo "<br>";
            echo "<h2>$this->comfortnum PC Comforterrible $this->comfortsize";
            echo "<h2>$this->bedsheetnum PC Comforterrible $this->bedsheetsize";
            echo "<h2>$this->pillownum PC Comforterrible $this->pillowsize";
            echo "<h2>$this->xbedsheetnum PC Comforterrible $this->xbedsheetsize";
            echo "<br>";
            echo "<br>";

        }else{
            echo "pdfghjkkkkkkkkkk valid name";
        }
    }
}

$HELLO = new name ("HELLO","1","1","2","240*220","200*180","55*80");
$HAVAN = new name ("HAVAN","1","1","2","240*220","200*180","55*80");
$NEVEADA =new xname ("NEVEADA",1,1,2,"240*220","200*180","55*80",2,"50*70");

    
if ($ii==="HAVAN"){
    $HAVAN->Search($ii);
}elseif($ii==="HELLO"){
    $HELLO->Search($ii);
}elseif ($ii==="NEVEADA"){
    $NEVEADA->Xsearch($ii);
}elseif($ii == NULL) {
    echo "";
}
else {
    echo "Pease Enter A Valid Name";
}



?>