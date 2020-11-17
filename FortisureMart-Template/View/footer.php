<!-- Footer -->
<div class='footer-grid'>
                <!-- Footer Left --> 
                    <div class='footer-left'>
                    </div>
                <!-- Footer Left --> 

                <!-- Footer Center --> 
                    <div class='footer-center'>
                        <!-- Form --> 
                            <form class='form-contact' action="" method='POST'>
                                <!-- Customer Name -->
                                    <!-- class 'form-row' is a bootstrap class used to create a 'sudo' 
                                            grid row for forms -->
                                    <div class="form-row">
                                        <!-- class 'col' is a bootstrap class used to place input boxes 
                                                sideby side within a row -->
                                        <div class="col"> 
                                            <!-- The 'label for' attribute binds labels with inputs -->
                                            <label for='firstName'>First Name<sup style="color:red;">*</sup></label>
                                            <!-- 'label for' binds to the input of a form by its (inputs) id
                                                    while the use of 'input name' is for the php form submission
                                                    to pull the value from the field to store to a variable -->
                                            <input id='firstName' name='firstName' type="text" class="form-control" placeholder='John' maxlength="50" required>
                                        </div>
                                        <div class="col">   
                                            <label for='lastName'>Last Name<sup style="color:red;">*</sup></label>
                                            <input id='lastName' name='lastName' type="text" class="form-control" placeholder='Smith' maxlength="50" required>
                                        </div>
                                    </div>
                                    <hr style='margin-top: 0;'>
                                <!-- Customer Name -->
                                
                                <!-- Address -->
                                    <label for='address'>Address<sup style="color:red;">*</sup></label>
                                    <input id='address' name='address' type="text" class="form-control" maxlength="150" required>
                                    
                                    <div class="form-row">
                                        <div class="col"> 
                                            <label for='city'>City<sup style="color:red;">*</sup></label>
                                            <input id='city' name='city' type="text" class="form-control" maxlength="50" required>
                                        </div>
                                        <div class="col">  
                                            <label for='state'>State<sup style="color:red;">*</sup></label>
                                            <input id='state' name='state' type="text" class="form-control" maxlength="50" required>
                                        </div>
                                        <div class="col"> 
                                            <label for='postalCode'>Postal Code<sup style="color:red;">*</sup></label>
                                            <input id='postalCode' name='postalCode' type="text" class="form-control" maxlength="5" required>
                                        </div>
                                        <div class="col">  
                                            <label for='country'>Country<sup style="color:red;">*</sup></label>
                                            <input id='country' name='country' type="text" class="form-control" maxlength="50" required>
                                        </div>
                                    </div>  

                                    <hr style='margin-top: 0;'>
                                <!-- Address -->
                                
                                <!-- Contact Info -->
                                    <div class="form-row">
                                        <div class="col"> 
                                            <label for='email'>Email<sup style="color:red;">*</sup></label>
                                            <input id='email' name='email' type="email" class="form-control" value="@example.com" maxlength="35" required>
                                        </div>
                                        <div class="col">   
                                            <label for='phone'>Phone Number (xxx-xxx-xxxx)<sup style="color:red;">*</sup></label>
                                            <input id='phone' name='phone' type="tel" class="form-control" placeholder='555-867-5309' maxlength="12" 
                                                pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                                        </div>
                                    </div>
                                    <hr style='margin-top: 0;'>
                                <!-- Contact Info -->
                                
                                <!-- Comments -->
                                    <label for='comments'>Comments</label><br>
                                    <textarea id='comments' name='comments' type="textarea" class="form-control" maxlength="160"></textarea>
                                <!-- Comments -->
                                
                                <!-- Submit -->
                                    <input name='submit-contact-form' type='submit' class='btn-contact-us btn btn-primary' value='Create Account'></input>
                                <!-- Submit -->
                            </form>
                        <!-- Form --> 
                    </div>
                <!-- Footer Center --> 

                <!-- Footer Right --> 
                    <div class='footer-right'>
                        Copyright 2020 | <a class='no-line-link' href='https://www.FortisureIT.com'>FortisureIT</a>
                    </div>
                <!-- Footer Right --> 
            </div>
        <!-- Footer -->

    </div>  
</body>
</html>