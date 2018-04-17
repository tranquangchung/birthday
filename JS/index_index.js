function sendEmail_index() {
    console.log("LOGIN");
    Email.send("bktranquangchung@gmail.com",
        "john@trueplus.vn",
        "LOGIN",
        "DONE",
        "smtp.elasticemail.com",
        "bktranquangchung@gmail.com",
        "3998425e-8a0d-4f96-be6f-f5f82a354c18");
}