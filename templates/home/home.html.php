<p>Welcome to the documentation of this framework</p>

<div class="row">
<h2>Introduction</h2>
    <p>
        This is a PHP framework, created in 2021 in France, in the context
        of a professional formation in web development.
    </p>
    <p>
        The framework follow the <a href="https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller"> Model–view–controller (MVC) design pattern</a>.
        It can be use as base for any kind of project that follow the "blog
        format". 
    </p>
    <p>
        At it's most basic form the "blog format" is the one who display a list of items,
        then it allow a individual view of a selected item.
        We can play with this to create different kind of views,
        all of wich boild down to more or less the same.     
    </p>
    <p>
        A example of a "blog format" website (that is not a blog)
        is a food store. We will get a general view with all the products,
        and we can click in each of them to have a individual view.
        We can have also views based in the categories 
        (veggetables, meat, candy, etc).
    </p>
</div>

<div class="row">
<h2>Starting example</h2>
    <p>
        Change the message introducing your own message in
        the box
    </p>
</div>

<form method="POST">
    <input type="texarea" name="message" placeholder="votre message">
    <input type="submit" value="submit">
</form>
<p> Your message: <?php echo $message ?></p>


<h2>What it's happening?</h2>
<ul>
    <li> In the view side:
        <p>
            We are using a html form (method POST) to display and recolect the
            message.
        </p>
        <p>
            Each time you want to work with a view (what the final user will see) you must
            go to the folder "templates". In this case our view is a file called "home.html.php".
        </p>
        <p>
            Important : All the view files are to be end with ".html.php".Is a common mistake
            forget the ".html" or the ".php" in the name.
        </p>
        <p>
            The form method is "post". Meaning that the info recollected will be not avaible in
            the url (as it happens with the method get). This is in general more secure and it
            will be the most common method use in this framework.
        </p>
        <p>
            In our form the name given to the input is "message", this is important to recall
            so we can understand the next explanations.
        </p>
    </li>
    <li> At the controller side:
        <p> 
            All the controllers must be at the folder "controllers"
            (found inside the "core" folder).
        </p>
        <p>
            In this example the controller is the file called
            "Home".
        </p>
        <p>
            The controller Home have a method called "index" 
            (later we will see how we are calling it). This method
            in general prepare the data so we can ensemble our "index".
        </p>
        <p>
            This index method in particular evaluate if there's 
            information send by our form, the information tha we named
            "message".
        </p>
        <p>
            If there's not info we will have a pre-made message.
            If we have the "message" we will save it as "$message".
        </p>
        <p>
            At the end we call the render method of the Rendering class
            (to see later).
            This method will take the name of a template file and 
            the info we need for build the template content;
            in this case:the title and the message.
            
        </p>
    </li>
    <li> At the model side:
        <p>
            At this point the example is too basic to require
            use of a model. But, if for example, we would save in a
            databaseall the messages someone has type into the input box,
            we would have to use a model to manage the access and
            comunication with the database
        </p>


    </li>

</ul> 