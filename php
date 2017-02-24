
                                           
  Welcome to the Doctrine2 CRUD generator  
                                           


This command helps you generate CRUD controllers and templates.

First, give the name of the existing entity for which you want to generate a CRUD
(use the shortcut notation like AcmeBlogBundle:Post)


By default, the generator creates two actions: list and show.
You can also ask it to generate "write" actions: new, update, and delete.


Determine the format to use for the generated CRUD.


Determine the routes prefix (all the routes will be "mounted" under this
prefix: /prefix/, /prefix/new, ...).


                             
  Summary before generation  
                             

You are going to generate a CRUD controller for "AdminBundle:Projet"
using the "annotation" format.


                   
  CRUD generation  
                   

  created ./src/AdminBundle/Controller//ProjetController.php
  created ./app/Resources/views/projet/
  created ./app/Resources/views/projet/index.html.twig
  created ./app/Resources/views/projet/show.html.twig
  created ./app/Resources/views/projet/new.html.twig
  created ./app/Resources/views/projet/edit.html.twig
  created ./src/AdminBundle/Tests/Controller/
  created ./src/AdminBundle/Tests/Controller//ProjetControllerTest.php
Generating the CRUD code: OK
  created ./src/AdminBundle/Form/
  created ./src/AdminBundle/Form/ProjetType.php
Generating the Form code: OK
Updating the routing: OK

                                         
  Everything is OK! Now get to work :).  
                                         

