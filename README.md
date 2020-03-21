# Notification Library via email using phpMailer  
This library has the function of sending e-mail using the phpmailer library. 
Doing this in an uncomplicated way is essential for any system.  
To install the library, run the following command:  

``` sh 
composer require marquesleonardo/composer_teste 
```  

To use the library, simply require the composer to autoload, invoke the class and call the method:  

```sh 
<? php  

require __DIR__. '/vendor/autoload.php';  

USE Notification\Email;  

$email = new Email (2, "mail.host.com", "your@email.com", "your-pass", "smtp secure (tls / ssl)", "port (587)", "from@email.com", "From Name");  
$email->sendEmail("SUbject", "Content", "reply@email.com", "ReplayName", "address@email.com", "Address Name"); 

```  

Note that the entire configuration of sending the email is using the magic method builder! Once the builder method has been invoked within your application, your system will be able to take the shots.  

### Developers 
* [Gustavo Web] - Developer of this library and tutor of the Composer na Prática course! 
* [Robson V. Leite] - CEO and Founder UpInside Treinamentos 
* [UpInside Treinamentos] - Official website of your digital marketing and programming school 
* [Leonardo Marques] - UpInside Treinamentos student, studying Composer na Prática course 
* [phpMailer] - Lib to send E-mail  

License 
----  

MIT  

** Another UpInside Training course, make good use of it! **  

[//]: # 

[Leonardo Marques]: <mailto: marquesprogramer@gmail.com.br> 
[Gustavo Web]: <mailto: gustavo@upinside.com.br> 
[Robson V. Leite]: <mailto: robson@upinside.com.br> 
[UpInside Treinamentos]: <https://www.upinside.com.br> 
[phpMailer]: <https://github.com/PHPMailer/PHPMailer>
