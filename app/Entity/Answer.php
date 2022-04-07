<?php

class Answer extends Entity
{
    private int $id;
    
    private string $text;

    private bool $isTheGoodAnswer;

    private string $idQuestion;

    // public function __construct(int $id , string $text, bool $isTheGoodAnswer = false)
    // {
    //     $this->setId($id)->setText($text)->setIsTheGoodAnswer($isTheGoodAnswer);
    // }

    // TODO : ajouter les propriétés

    // TODO : ajouter les méthodes


    /**
     * Get the value of text
     */ 
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set the value of text
     *
     * @return  self
     */ 
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get the value of isTheGoodAnswer
     */ 
    public function getIsTheGoodAnswer()
    {
        return $this->isTheGoodAnswer;
    }

    /**
     * Set the value of isTheGoodAnswer
     *
     * @return  self
     */ 
    public function setIsThe($isTheGoodAnswer)
    {
        $this->isTheGoodAnswer = $isTheGoodAnswer;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of idQuestion
     */ 
    public function getIdQuestion()
    {
        return $this->idQuestion;
    }

    /**
     * Set the value of idQuestion
     *
     * @return  self
     */ 
    public function setIdQuestion($idQuestion)
    {
        $this->idQuestion = $idQuestion;

        return $this;
    }
}