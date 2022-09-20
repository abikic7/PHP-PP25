<?php

class SmjerController extends AutorizacijaController
{

    private $phtmlDir = 'privatno' . 
        DIRECTORY_SEPARATOR . 'smjerovi' .
        DIRECTORY_SEPARATOR;

    private $smjer=null;

    public function index()
    {

        // Ovo je JAKO LOŠE ali radi - NIKADA OVO NE RADITI
        /*
        $veza = DB::getInstance();
        $izraz = $veza->prepare('
        
            select * from smjer
        
        ');
        $izraz->execute(); // OVO MORA BITI OBAVEZNO
        $smjeroviIzBaze = $izraz->fetchAll(); 

        $this->view->render($this->phtmlDir . 'read',[
            'smjerovi' => $smjeroviIzBaze
        ]);
        */
        $nf = new NumberFormatter("hr-HR", \NumberFormatter::DECIMAL);
        $smjerovi = Smjer::read();
        foreach($smjerovi as $s){
            $s->cijena = $nf->format($s->cijena);
        }

        $this->view->render($this->phtmlDir . 'read',[
            'smjerovi' => $smjerovi
        ]);
    }

    public function promjena($sifra)
    {
        $this->view->render($this->phtmlDir . 'update',[
            'smjer' => Smjer::readOne($sifra)
        ]);

    }

    public function brisanje($sifra)
    {
        $this->view->render($this->phtmlDir . 'delete',[
            'smjer' => $sifra
        ]);

    }

    public function novi()
    {
        if(isset($_POST['naziv'])){
            
            $this->smjer = (object) $_POST;
            $this->smjer->certificiran = isset($_POST['certificiran']);
            //kontroliraj

            //kontrola nije prošla
            $this->view->render($this->phtmlDir . 'create',[
                'smjer'=>$this->smjer,
                'poruka'=>'Ono što ne valja'
            ]);
            //Log::log($smjer);
        }else{
            $this->pripremiSmjer();
            $this->view->render($this->phtmlDir . 'create',[
                'smjer'=>$this->smjer,
                'poruka'=>'Popunite sve podatke'
            ]);
        }
    }

    private function pripremiSmjer()
    {
        $this->smjer=new stdClass();
        $this->smjer->naziv='';
        $this->smjer->cijena='';
        $this->smjer->trajanje='';
        $this->smjer->upisnina='';
        $this->smjer->certificiran=false;
    }

}