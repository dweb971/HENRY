<?php
class Test
{
    //propriétés
    private $_question1;
    private $_question2;
    private $_question3;
    private $_question4;
    private $_question5;
    private $_question6;
    private $_question7;
    private $_question8;
    private $_question9;
    private $_question10;
    private $_question11;
    private $_question12;
    private $_question13;
    private $_question14;
    private $_question15;
    private $_question16;
    private $_question17;
    private $_question18;
    private $_question19;



    //méthodes
    public function __construct(){
        
    }


    public function test(array $data){
        // affectation données
        print_r($data);
        $this->set_question1($this->nettoyer($data["question1"]));
        $this->set_question2($this->nettoyer($data["question2"]));
        $this->set_question3($this->nettoyer($data["question3"]));
        $this->set_question4($this->nettoyer($data["question4"]));
        $this->set_question5($this->nettoyer($data["question5"]));
        $this->set_question6($this->nettoyer($data["question6"]));
        $this->set_question7($this->nettoyer($data["question7"]));
        $this->set_question8($this->nettoyer($data["question8"]));
        $this->set_question9($this->nettoyer($data["question9"]));
        $this->set_question10($this->nettoyer($data["question10"]));
        $this->set_question11($this->nettoyer($data["question11"]));
        $this->set_question12($this->nettoyer($data["question12"]));
        $this->set_question13($this->nettoyer($data["question13"]));
        $this->set_question14($this->nettoyer($data["question14"]));
        $this->set_question15($this->nettoyer($data["question15"]));
        $this->set_question16($this->nettoyer($data["question16"]));
        $this->set_question17($this->nettoyer($data["question17"]));
        $this->set_question18($this->nettoyer($data["question18"]));
        $this->set_question19($this->nettoyer($data["question19"]));

    }


    public function nettoyer($chaine){
        
        $chaine = trim(strip_tags($chaine));
        return $chaine;
    }

    /*Getter & setter*/

    

    /**
     * Get the value of _question1
     */ 
    public function get_question1()
    {
        return $this->_question1;
    }

    /**
     * Set the value of _question1
     *
     * @return  self
     */ 
    public function set_question1($_question1)
    {
        $this->_question1 = $_question1;

        return $this;
    }

    /**
     * Get the value of _question2
     */ 
    public function get_question2()
    {
        return $this->_question2;
    }

    /**
     * Set the value of _question2
     *
     * @return  self
     */ 
    public function set_question2($_question2)
    {
        $this->_question2 = $_question2;

        return $this;
    }

    /**
     * Get the value of _question3
     */ 
    public function get_question3()
    {
        return $this->_question3;
    }

    /**
     * Set the value of _question3
     *
     * @return  self
     */ 
    public function set_question3($_question3)
    {
        $this->_question3 = $_question3;

        return $this;
    }

    /**
     * Get the value of _question4
     */ 
    public function get_question4()
    {
        return $this->_question4;
    }

    /**
     * Set the value of _question4
     *
     * @return  self
     */ 
    public function set_question4($_question4)
    {
        $this->_question4 = $_question4;

        return $this;
    }

    /**
     * Get the value of _question5
     */ 
    public function get_question5()
    {
        return $this->_question5;
    }

    /**
     * Set the value of _question5
     *
     * @return  self
     */ 
    public function set_question5($_question5)
    {
        $this->_question5 = $_question5;

        return $this;
    }

    /**
     * Get the value of _question6
     */ 
    public function get_question6()
    {
        return $this->_question6;
    }

    /**
     * Set the value of _question6
     *
     * @return  self
     */ 
    public function set_question6($_question6)
    {
        $this->_question6 = $_question6;

        return $this;
    }

    /**
     * Get the value of _question7
     */ 
    public function get_question7()
    {
        return $this->_question7;
    }

    /**
     * Set the value of _question7
     *
     * @return  self
     */ 
    public function set_question7($_question7)
    {
        $this->_question7 = $_question7;

        return $this;
    }

    /**
     * Get the value of _question8
     */ 
    public function get_question8()
    {
        return $this->_question8;
    }

    /**
     * Set the value of _question8
     *
     * @return  self
     */ 
    public function set_question8($_question8)
    {
        $this->_question8 = $_question8;

        return $this;
    }

    /**
     * Get the value of _question9
     */ 
    public function get_question9()
    {
        return $this->_question9;
    }

    /**
     * Set the value of _question9
     *
     * @return  self
     */ 
    public function set_question9($_question9)
    {
        $this->_question9 = $_question9;

        return $this;
    }

    /**
     * Get the value of _question10
     */ 
    public function get_question10()
    {
        return $this->_question10;
    }

    /**
     * Set the value of _question10
     *
     * @return  self
     */ 
    public function set_question10($_question10)
    {
        $this->_question10 = $_question10;

        return $this;
    }

    /**
     * Get the value of _question11
     */ 
    public function get_question11()
    {
        return $this->_question11;
    }

    /**
     * Set the value of _question11
     *
     * @return  self
     */ 
    public function set_question11($_question11)
    {
        $this->_question11 = $_question11;

        return $this;
    }

    /**
     * Get the value of _question12
     */ 
    public function get_question12()
    {
        return $this->_question12;
    }

    /**
     * Set the value of _question12
     *
     * @return  self
     */ 
    public function set_question12($_question12)
    {
        $this->_question12 = $_question12;

        return $this;
    }

    /**
     * Get the value of _question13
     */ 
    public function get_question13()
    {
        return $this->_question13;
    }

    /**
     * Set the value of _question13
     *
     * @return  self
     */ 
    public function set_question13($_question13)
    {
        $this->_question13 = $_question13;

        return $this;
    }

    /**
     * Get the value of _question14
     */ 
    public function get_question14()
    {
        return $this->_question14;
    }

    /**
     * Set the value of _question14
     *
     * @return  self
     */ 
    public function set_question14($_question14)
    {
        $this->_question14 = $_question14;

        return $this;
    }

    /**
     * Get the value of _question15
     */ 
    public function get_question15()
    {
        return $this->_question15;
    }

    /**
     * Set the value of _question15
     *
     * @return  self
     */ 
    public function set_question15($_question15)
    {
        $this->_question15 = $_question15;

        return $this;
    }

    /**
     * Get the value of _question16
     */ 
    public function get_question16()
    {
        return $this->_question16;
    }

    /**
     * Set the value of _question16
     *
     * @return  self
     */ 
    public function set_question16($_question16)
    {
        $this->_question16 = $_question16;

        return $this;
    }

    /**
     * Get the value of _question17
     */ 
    public function get_question17()
    {
        return $this->_question17;
    }

    /**
     * Set the value of _question17
     *
     * @return  self
     */ 
    public function set_question17($_question17)
    {
        $this->_question17 = $_question17;

        return $this;
    }

    /**
     * Get the value of _question18
     */ 
    public function get_question18()
    {
        return $this->_question18;
    }

    /**
     * Set the value of _question18
     *
     * @return  self
     */ 
    public function set_question18($_question18)
    {
        $this->_question18 = $_question18;

        return $this;
    }

    /**
     * Get the value of _question19
     */ 
    public function get_question19()
    {
        return $this->_question19;
    }

    /**
     * Set the value of _question19
     *
     * @return  self
     */ 
    public function set_question19($_question19)
    {
        $this->_question19 = $_question19;

        return $this;
    }
}
?>