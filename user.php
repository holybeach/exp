<?php
/*namespace Kate;

class User{
    private ?string $middleName=null;
    public function __construct(private string $surname, private string $name, private string $data)
    {
    
    }
    public function getSurname() : string{
        return ucfirst(mb_strtolower($this->surname));
    }
    public function getName() : string{
        return mb_strtolower($this->name);
    }
    public function getDate() : string{
        return $this->data;
    }
    public function setMiddleName(string $middleName): void{
        $this->middleName = $middleName;
    }
    public function getMiddleName() : ?string{
        return mb_strtolower($this->middleName);
    }
    public function getFullName():string{
        return implode(' ',[
            $this->getSurname(),
            mb_substr($this->getName(),0,1),
            mb_substr($this->getMiddleName(),0,1),
        ]);
    }
}

$user = new User(name:'ЕкаТеРина', surname:'КоСтина', data:'2000-01-01');
$user->setMiddleName('Антоновна');
echo $user->getFullName();
$user = new User(name:'Жанна', surname:'Васильевна', data:'2000-01-01');
$user->setMiddleName('Антоновна');
echo $user->getFullName();
*/
class Car{
    public function __construct(public Brand $brand,public Model $model,public string $dateOfProducing){
        
    }
    public function getBrand(): Brand{
        return $this->brand;
    }
    public function getModel(): Model{
        return $this->model;
    }
    public function __toString() : string {
    	return implode(' ', [$this->brand, $this->model,$this->dateOfProducing]);
    }
}
class Model{
    public function __construct(public string $name,public string $country,public string $startproducing,public string $parametrs){

    }
    public function __toString() : string {
    	return implode(' ', [$this->name, $this->country, $this->startproducing, $this->parametrs]);
    }
}
class Brand{
    public function __construct(public string $brandname,public Country $country,public User $userinfo){

    }
    public function getUser(): User{
        return $this->userinfo;
    }
    public function getCountry(): Country{
        return $this->country;
    }
    
    public function __toString() : string {
    	return implode(' ', [
    		$this->brandname,
    		$this->country,
    		$this->userinfo
    		]);
    }
}
 class Country{
    public function __construct(private string $name,private string $domen,private string $phoneCode){

    }
    public function getName() : string{
        return $this->name;
    }
    public function getDomen() : string{
        return $this->domen;
    }
    public function getPhoneCode() : string{
        return $this->phoneCode;
    }
    
    public function __toString() : string {
    	return implode(' ', [
    		$this->name,
    		$this->domen,
    		$this->phoneCode
    	]);
    }
}
class User{
    public function __construct(private string $lastname,private string $firstname,private string $middlename,private string $phonenumber,private string $email){

    }
    public function getSurname() : string{
        return $this->lastname;
    }
    public function getName() : string{
        return $this->firstname;
    }
    public function getMiddleName() : string{
        return $this->middlename;
    }
    public function getFullName():string{
        return implode(' ',[
            $this->getSurname(),
            $this->getName(),
            $this->getMiddleName(),
        ]);
    }
    public function getPhoneNumber() : ?string{
        return $this->phonenumber;
    }
    public function getEmail() : ?string{
        return $this->email;
    }
    
    public function __toString() :string {
    	return $this->getFullName();
    }

}
$user= new User(lastname:'Иванов',firstname:'Иван',middlename:'Ивнович',phonenumber:'89622688575',email:'qwerty@gmail.com');
$country=new Country(name:'Germany',domen:'dh',phoneCode:'+49');
$brand=new Brand(brandname:'Audi',country:$country,userinfo:$user);
$model=new Model(name:'A4',country:'Italy',startproducing:'19.03.2000',parametrs:'249 л.с');
$car=new Car(brand:$brand,model:$model,dateOfProducing:'19.05.2000');
echo $car;