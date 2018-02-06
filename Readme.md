# PagOnline
PagOnline Igfs payment gateway sdk for php 7.x

```php

require __DIR__.'/vendor/autoload.php';

use PagOnline\init\IgfsCgInit;

 $init = new IgfsCgInit();
 //$init->disableCheckSSLCert();
 $init->serverURL="https://paymentgateway.it/IGFS_CG_SERVICES/services";
 $init->timeout=30000;
 $init->tid="TID-CODE1234";
 $init->kSig="0000000000000000000000000000";
 $init->shopID="mytransactionid";
 $init->shopUserRef="customer-email";
 $init->trType="AUTH";
 $init->currencyCode="EUR";
 $init->amount=4400; //Amount without comma, 1,00EUR will be 100
 $init->landID="IT"; //Language iso code
 $init->notifyURL="https://myserver.it/my-thankyou-page.php";
 $init->errorURL="https://myserver.it/my-error-page.php";

 if(!$init->execute()){
                echo $init->rc;
 }else{
        print ("location: ".$init->redirectURL);
 }

```
