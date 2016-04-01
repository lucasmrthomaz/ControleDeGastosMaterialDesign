Projeto Fox


* Faça o clone do projeto 

```
    # git clone https://github.com/msfidelis/ControleDeGastosMaterialDesign.git
```

* Crie um Virtualhost para o projeto 

Ex: 
```
        <VirtualHost *:80>
                ServerName gastos.localhost.com
                ServerAlias www.gastos.localhost.com
                DocumentRoot /var/www/html/ControleDeGastosMaterialDesign/
                <Directory /var/www/html/ControleDeGastosMaterialDesign//>
                        Options Indexes FollowSymLinks
                        #MultiViews
                        AllowOverride All
                        Order allow,deny
                        allow from all
                </Directory>
                ErrorLog /gastos.localhost.com.error.log
                CustomLog /gastos.localhost.com.access.log combined
        </VirtualHost>


```

* Instale o banco de dados 

``` 
  # mysql -u root -p
  # create database livro;
  # exit
  # cd ControleDeGastosMaterialDesign/
  # mysql -u root livro < banco_de_dados.sql

```
Login: msfidelis01@gmail.com

Senha: teste123 


#Observações

Frameworks utilizados:
* Smarty - http://www.smarty.net/
* Material Design Bootstrap - http://fezvrasta.github.io/bootstrap-material-design/bootstrap-elements.html
* Google Pie - https://developers.google.com/chart/interactive/docs/gallery/piechart
* DOMPdf - https://github.com/dompdf/dompdf

 Não realizando
*  Validações de campos, inserts e selects


:)
