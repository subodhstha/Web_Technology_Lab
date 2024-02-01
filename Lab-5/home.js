function validateForm() {
    const firstname = document.getElementById('fname').value;
    const lastname = document.getElementById('lname').value;
    const gender = document.querySelector('input[name="gender"]:checked');
    const selectedSemester = document.getElementById('semester').value;
    const symbolnumber = document.getElementById('symbol').value;
    const selectedBatch = document.getElementById('batch').value;

    if (firstname === "") {
        alert("Please enter your First Name");
        return false;
    }
    if (lastname === "") {
        alert("Please enter your Last Name");
        return false;
    }
    if (!gender) {
        alert("Please select your Gender");
        return false;
    }
    if (selectedSemester === "") {
        alert("Please select your Class");
        return false;
    }
    if (symbolnumber === "") {
        alert("Please enter your Roll Number");
        return false;
    }
    if (selectedBatch === "") {
        alert("Please select your Batch");
        return false;
    }
    return true;
}