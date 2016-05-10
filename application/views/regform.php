<h1>Register Now!</h1>
<form action="members/insert" method="post" >
    <div class="row">
        <div class="input-field col">
            <input name="fname" type="text" class="validate" 

                   required>
            <label for="first_name">First Name</label>
        </div>
        <div class="input-field col">
            <input name="lname" type="text" class="validate" 

                   required>
            <label for="last_name">Last Name</label>
        </div>
        <div class="input-field col">
            <input name="mname" type="text" class="validate" 

                   required>
            <label for="middle_name">Middle Name</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col" style="width: 550px">
            <input name="address" type="text" class="validate" 

                   required>
            <label for="address">Address</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col">
            <input name="email" type="email" class="validate" 

                   required>
            <label for="email">Email</label>
        </div>
        <div class="input-field col">
            <input name="password" type="password" class="validate" required>
            <label for="password">Password</label>
        </div>
    </div>
    <div class="row">
        <button class="waves-effect waves-light red btn center-align" type="submit" name="action" style="margin-left:20%;margin-top: 10%;">Register
            <i class="material-icons right">send</i>
        </button>
    </div>
</form>