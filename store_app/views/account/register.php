<script type="text/javascript" src="<?php echo asset_url('js/validation.js'); ?>"></script>

<div class="row">
    <h2>Register</h2>
    <?php echo form_open('account/register', array('role' => 'form')); ?>
        <div class="col-lg-4 border-right">
            <div class="form-group">
                <label for="username">Title</label>
                <select class="form-control">
                    <option name="title" value="Mr" <?php if(isset($title) && $title == 'Mr'){ echo 'checked'; } ?>>Mr.</option>
                    <option name="title" value="Mrs" <?php if(isset($title) && $title == 'Mrs'){ echo 'checked'; } ?>>Mrs.</option>
                    <option name="title" value="Miss" <?php if(isset($title) && $title == 'Miss'){ echo 'checked'; } ?>>Miss.</option>
                    <option name="title" value="Ms" <?php if(isset($title) && $title == 'Ms'){ echo 'checked'; } ?>>Ms.</option>
                    <option name="title" value="Dr" <?php if(isset($title) && $title == 'Dr'){ echo 'checked'; } ?>>Dr.</option>
                </select>
            </div>
        
            <div class="form-group">
                <label for="forename">Forename</label>
                <input name="forename" type="text" class="form-control" id="forename" placeholder="Forename" value="<?php if(isset($forename)){echo $forename;} ?>">
            </div>
        
            <div class="form-group">
                <label for="surname">Surname</label>
                <input name="surname" type="text" class="form-control" id="surname" placeholder="Surname"  value="<?php if(isset($surname)){echo $surname;} ?>">
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Email" value="<?php if(isset($email)){echo $email;} ?>">
            </div>

            <div id="passwordGroup" class="form-group">
                <label for="password">Password</label>
                <input name="password" id='password' type="password" class="form-control" id="password" placeholder="Password" onkeyup="validatePassword()" onchange="validatePassword()" value="<?php if(isset($password)){echo $password;} ?>">
                <span id="passwordSpan" class=""></span>
            </div>
            
            <div id="passwordConfirmGroup" class="form-group">
                <label  for="confirmpassword">Confirm Password</label>
                <input id="passwordconfirm" type="password" class="form-control" id="confirmpassword" placeholder="Confirm Password" onkeyup="validatePasswordConfirm()" onchange="validatePasswordConfirm()" value="<?php if(isset($passwordconfirm)){echo $passwordconfirm;} ?>">
                <span id="passwordConfirmSpan" class=""></span>
            </div>
            
            <div class="checkbox">
                <label>
                  <input name="newsletter" type="checkbox" value="">I do not wish to subscribe to the monthly newsletter
                </label>
            </div>
            
        </div>

        <div class="col-lg-5">
            
            <div class="form-group">
                <label for="address1">Address Line 1</label>
                <input name="address1" type="text" class="form-control" id="address1" placeholder="Address Line 1">
            </div>
            
            <div class="form-group">
                <label for="address2">Address Line 2</label>
                <input name="address2" type="text" class="form-control" id="address2" placeholder="Address Line 2">
            </div>
            
            <div class="form-group">
                <label for="town">Town</label>
                <input name="town" type="text" class="form-control" id="town" placeholder="Town">
            </div>
            
            <div class="form-group">
                <label for="postcode">Postcode</label>
                <input name="postcode" type="text" class="form-control" id="postcode" placeholder="Postcode">
            </div>
            
            <div class="form-group">
                <label for="county">County</label>
                <input name="county" type="text" class="form-control" id="county" placeholder="County">
            </div>
            
            <div class="form-group">
                <label for="country">Country</label>
                <select class="form-control">
                    <option name="country" value="UK">UK</option>
                    <option name="country" value="Ireland">Ireland</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="phone">Phone</label>
                <input name="phone" type="number" class="form-control" id="phone" placeholder="Phone">
            </div>

        </div>
        
        <div class="row">
            <div class="col-lg-6">
                <div class="checkbox">
                    <label>
                        <input name="agree" type="checkbox" value="">I have read and I agree to the <a href="<?php echo base_url('page/terms'); ?>">Terms & Conditions</a>
                    </label>
                </div>
            </div>
            <div class="col-lg-3">
                <button name="submit" value="Register" type="submit" class="btn btn-default">Register</button>
            </div>
        </div>
        
    </form>
</div>