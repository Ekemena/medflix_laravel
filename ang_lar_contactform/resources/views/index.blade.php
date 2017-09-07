<!DOCTYPE html>
<html lang="en-US" ng-app="contactformRecords">
    <head>
        <title>Medflix assignment</title>

        <!-- Load Bootstrap CSS -->
        <link href="<?= asset('css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?= asset('css/medflex.css') ?>" rel="stylesheet">

    </head>
    <body>
        <!-- <h2>Employees Database</h2>
        <div  ng-controller="contactformController">

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Course</th>
                        <th>Message</th>
                        <th><button id="btn-add" class="btn btn-primary btn-xs" ng-click="toggle('add', 0)">Add New Employee</button></th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="contact in contacts">
                        <td>@{{ contact.id }}</td>
                        <td>@{{ contact.name }}</td>
                        <td>@{{ contact.email }}</td>
                        <td>@{{ contact.course }}</td>
                        <td>@{{ contact.mesage }}</td>
                        <td>
                            <button class="btn btn-default btn-xs btn-detail" ng-click="toggle('edit', contact.id)">Edit</button>
                            <button class="btn btn-danger btn-xs btn-delete" ng-click="confirmDelete(contact.id)">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel">@{{form_title}}</h4>
                        </div>
                        <div class="modal-body">
                            <form name="frmEmployees" class="form-horizontal" novalidate="">

                                <div class="form-group error">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control has-error" id="name" name="name" placeholder="Fullname" value="@{{name}}" 
                                        ng-model="contact.name" ng-required="true">
                                        <span class="help-inline" 
                                        ng-show="frmEmployees.name.$invalid && frmEmployees.name.$touched">Name field is required</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="@{{email}}" 
                                        ng-model="contact.email" ng-required="true">
                                        <span class="help-inline" 
                                        ng-show="frmEmployees.email.$invalid && frmEmployees.email.$touched">Valid Email field is required</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Course</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="course" name="course" placeholder="Course" value="@{{course}}" 
                                        ng-model="contact.course" ng-required="true">
                                    <span class="help-inline" 
                                        ng-show="frmEmployees.course.$invalid && frmEmployees.course.$touched">Course field is required</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Message</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="message" name="message" placeholder="message" value="@{{message}}" 
                                        ng-model="contact.message" ng-required="true">
                                    <span class="help-inline" 
                                        ng-show="frmEmployees.message.$invalid && frmEmployees.message.$touched">message field is required</span>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="btn-save" ng-click="save(modalstate, id)" ng-disabled="frmEmployees.$invalid">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

<div id="main">  
 
<div>
  Welcome to China
</div>

<div class="nav-menu">
   <nav class="navbar navbar-default">
    <div class="container-fluid">
     <div class="navbar-header">     
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">HOME</a></li>
      <li><a href="#">UNIVERSITIES</a></li>
      <li><a href="#">NEWS</a></li>
      <li><a href="#">SUCCESS</a></li>
      <li><a href="#">CONTACT</a></li>
    </ul>
  </div>
 </nav>
</div>


<div>
  <h1>Contact</h1>
</div>


<div>
CALL OR EMAIL

contact information

EMAIL

We will be available in the following emails

General Inquiries
starwisechina@yahoo.com
</div>

<div>
  <div class="sqs-block form-block sqs-block-form" data-block-type="9"><div class="sqs-block-content">



<div class="form-wrapper">
  <div class="form-inner-wrapper col-sm-5">
    <form autocomplete="on" action="" method="POST" ng-submit="saveContactForm(contact)" data-form-id="">      
        <div class="field-list clear">
              <fieldset id="" class="form-item fields name required">
              <div class="title">Name <span class="required">*</span></div>
              <legend>Name</legend>              
                <div class="field first-name">
                  <label class="caption">
                    <input class="field-element field-control form-control" ng-model="contact.firstname" name="fname" x-autocompletetype="given-name" type="text" spellcheck="false" maxlength="30" data-title="First" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                  First Name</label>
                </div>
                <div class="field last-name">
                  <label class="caption">
                    <input class="field-element field-control form-control" name="lname" ng-model="contact.lastname" x-autocompletetype="surname" type="text" spellcheck="false" maxlength="30" data-title="Last">
                  Last Name</label>
                </div>
              </fieldset>


              <div id="" class="form-item field email required">
                <label class="title" for="">Email Address <span class="required">*</span></label>
                <input class="field-element form-control" name="email" x-autocompletetype="email" ng-model="contact.email" type="text" spellcheck="false" >
              </div>
            
              <div class="form-item field text required">
                <label class="title" >Course and university preferred <span class="required">*</span></label>
                <input class="field-element text form-control" type="text" ng-model="contact.course">
              </div>
            
              <div  class="form-item field textarea required">
                <label class="title" >Message <span class="required">*</span></label>                
                <textarea class="field-element form-control" ng-model="contact.message" ></textarea>
              </div>

        </div>

      <div class="form-button-wrapper form-button-wrapper--align-left">
        <input class="button sqs-system-button sqs-editable-button" type="submit" value="Submit" ng-click="save(contact)">
      </div>
      

      <div class="hidden form-submission-text">Thank you!</div>
      <div class="hidden form-submission-html" data-submission-html=""></div>
    </form>
  </div>
 </div>
</div>
</div>
</div>


</div>





















        <!-- Load Javascript Libraries (AngularJS, JQuery, Bootstrap) -->
        <script src="<?= asset('app/lib/angular/angular.min.js') ?>"></script>
        <script src="<?= asset('js/jquery.js') ?>"></script>
        <script src="<?= asset('js/bootstrap.min.js') ?>"></script>
        
        <!-- AngularJS Application Scripts -->
        <script src="<?= asset('app/app.js') ?>"></script>
        <script src="<?= asset('app/controllers/contactform.js') ?>"></script>
    </body>
</html>