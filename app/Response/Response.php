<?php 
namespace App\Response;

class Response 
{
    private $messages;
    private $type;
    private $dataSet;

    public function __construct() 
    {

    }

    public function toString()
    {   
        $data = [];    
        $messages = $this->getMessages();

        $data['message']['text'] = $messages;
        $data['message']['type'] = $this->getType();
        
        if ($this->getDataset() != "")
        {
            $data['dataset'] = $this->getDataset();
        }

        return $data;        
    }

    public function setMessages($data)
    {
        $this->messages = $data;
    }

    public function getMessages()
    {
        return $this->messages;
    }

    public function setTypeN()
    {
        $this->type = 'N';
    }

    public function setTypeS()
    {
        $this->type = 'S';
    }

    public function getType()
    {
        return $this->type;
    }

    public function setDataSet($data)
    {
        $this->dataSet = $data;
    }

    public function getDataset()
    {
        return $this->dataSet;
    }
}
?>