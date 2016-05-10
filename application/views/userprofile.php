<?php
    $data = $this->session->userdata['userlogin'];
?>
<h1>Welcome!</h1>
<div class="row">
    <div class="input-field col">
        <input name="fname" type="text" class="validate" value="<?php echo $data['fname'] ?>" readonly>
        <label for="first_name">First Name</label>
    </div>
    <div class="input-field col">
        <input name="lname" type="text" class="validate" value="<?php echo $data['lname'] ?>" readonly>
        <label for="last_name">Last Name</label>
    </div>
    <div class="input-field col">
        <input name="mname" type="text" class="validate" value="<?php echo $data['mname'] ?>" readonly>
        <label for="middle_name">Middle Name</label>
    </div>
</div>
<div class="row">
    <div class="input-field col" style="width: 550px">
        <input name="address" type="text" class="validate" value="<?php echo $data['address'] ?>" readonly>
        <label for="address">Address</label>
    </div>
</div>
<div class="row">
    <div class="input-field col" style="width: 550px">
        <input name="email" type="email" class="validate" value="<?php echo $data['email'] ?>" readonly>
        <label for="email">Email</label>
    </div>
</div>