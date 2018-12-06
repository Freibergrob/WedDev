<link rel="stylesheet" href="loggedin.css">
<p class = "loggedin"><?= 'You are logged in!';?></p>
<!--
    Account Management Form
    How does this submit?
    Perhaps submit the form to an update account handler,
    that redirects back to the account page after update?
-->
<script>
    function valueChanged() {
    if (document.getElementById("fall").checked == true) {
        document.getElementById("fall").value = 1;
        document.getElementById("spring").value = 0;
    } else {
        document.getElementById("fall").value = 0;
        document.getElementById("spring").value = 1;
    }
    console.log(document.getElementById("fall").value);
    console.log(document.getElementById("spring").value)
}
</script>
<p>
<form>
    <label for="first">First Name</label>
    <input type="input" id="first" class="first" placeholder="First Name">
    <label for="last">Last Name</label>
    <input type="input" id="last" class="last" placeholder="Last Name">
    <label for="nick">Nickname</label>
    <input type="input" id="nick" class="nick" placeholder="Nickname">
    <label for="year">Graduation Year</label>
    <select id="year" name="grad-year">
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>
    <option value="2023">2023</option>
    <option value="2024">2024</option>
    <option value="2025">2025</option>
    <option value="2026">2026</option>
    </select>
    <label for="fall">Fall</label>
    <input type="radio" id="fall" name="fall" value="fall">
    <label for="spring">Spring</label>
    <input type="radio" id="spring" name="spring" value="spring"> 
    <label for="email">Email</label>
    <input type="input" id="email" name="email" placeholder="Email">
    <label for="bio">Bio</label>
    <textarea rows="4" cols="50">
        Tell us about yourself...        
    </textarea>
</form>
</p>