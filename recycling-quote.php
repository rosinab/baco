

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Recycling collection quote</title>
    </head>
    <body>

    <?php include 'header.php' ?>
        <div class="form-1">
            <h2 class="mt-3">Get a quote</h2>
            <h3 class="mt-5">Select your collection size</h3>
            <div class="dropdown mt-4 dropdown-c">
                <button class="btn btn-secondary dropdown-toggle btn-outline-dark bg-light text-dark form_input skip-size" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Select collection size
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button class="dropdown-item" type="button">size 1</button>
                    <button class="dropdown-item" type="button">size 2</button>
                    <button class="dropdown-item" type="button">size 3</button>
                    <button class="dropdown-item" type="button">size 4</button>
                    <button class="dropdown-item" type="button">size 5</button>
                    <button class="dropdown-item" type="button">size 6</button>
                </div>
            </div>
            <h3>Collection location </h3>
            <div class="dropdown mt-4 dropdown-c">
                <button class="btn btn-secondary dropdown-toggle btn-outline-dark bg-light text-dark form_input skip-size" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Location
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button class="dropdown-item" type="button">area 1</button>
                    <button class="dropdown-item" type="button">area 2</button>
                    <button class="dropdown-item" type="button">area 3</button>
                    <button class="dropdown-item" type="button">area 4</button>
                    <button class="dropdown-item" type="button">area 5</button>
                    <button class="dropdown-item" type="button">area 6</button>
                </div>  
            </div>
            <h3>Type of waste</h3>
            <div class="mt-4 waste-type1 waste-type d-flex mr-">
                <div class="form-check checkbox form-check-inline">
                    <input class="form-check-input " type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Waste type 1
                    </label>
                </div>
                <div class="form-check checkbox checkbox-last2 form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Waste type 2
                    </label>
                </div>
                <div class="form-check checkbox checkbox-last form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Waste type 3
                    </label>
                </div>
            </div>
            <div class="pt-3 waste-type d-flex mr-">
                <div class="form-check checkbox form-check-inline">
                    <input class="form-check-input " type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Waste type 4
                    </label>
                </div>
                <div class="form-check checkbox checkbox-last2 form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Waste type 5
                    </label>
                </div>
                <div class="form-check checkbox checkbox-last form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Waste type 6
                    </label>
                </div>
            </div>
            <div class="pt-3 waste-type d-flex mr-">
                    <div class="form-check checkbox form-check-inline">
                        <input class="form-check-input " type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Waste type 7
                        </label>
                    </div>
                    <div class="form-check checkbox checkbox-last2 form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Waste type 8
                        </label>
                    </div>
                    <div class="form-check checkbox checkbox-last form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Waste type 9
                        </label>
                    </div>
                </div>
            <h3>Date of first collection</h3>
            <div class="mt-4 date">
                <div>
                    <input type="text" class="form-control btn-outline-dark start-date" placeholder="dd" aria-label="day" aria-describedby="basic-addon1">
                    <p class="date-slash">/</p>
                    <input type="text" class="form-control btn-outline-dark start-date" placeholder="mm" aria-label="day" aria-describedby="basic-addon1">
                    <p class="date-slash">/</p>
                    <input type="text" class="form-control btn-outline-dark start-date" placeholder="yyyy" aria-label="day" aria-describedby="basic-addon1">
                </div>
            </div>
        </div>
        <div class="form-2">
            <h2 class="mt-3">Contact info</h2>
            <div>
                <h3 class="mt-5">Email address</h3>
                <input type="text" class=" mt-4 contact-1 form-control btn-outline-dark email" placeholder="someone@email.com" aria-label="email" aria-describedby="basic-addon1">
                <h3>Phone number</h3>
                <input type="text" class=" contact-1 form-control btn-outline-dark phone-number" placeholder="number" aria-label="phone number" aria-describedby="basic-addon1">
                <div class="name">
                    <h3>Name</h3>
                    <input type="text" class=" first-name contact-2 form-control btn-outline-dark " placeholder="first name" aria-label="first-name" aria-describedby="basic-addon1">
                    <input type="text" class=" contact-2 form-control btn-outline-dark " placeholder="surname" aria-label="second-name" aria-describedby="basic-addon1">
                </div>
                <h3>Address</h3>
                <input type="text" class=" contact-1 form-control btn-outline-dark email" placeholder="street address" aria-label="email" aria-describedby="basic-addon1">
                <input type="text" class=" contact-1 form-control btn-outline-dark phone-number" placeholder="address line 2" aria-label="phone number" aria-describedby="basic-addon1">
                <div class="address"> 
                    <input type="text" class=" address-1-2 address-1 contact-3 form-control btn-outline-dark email" placeholder="City/Town" aria-label="email" aria-describedby="basic-addon1">
                    <input type="text" class=" address-1-2 contact-3 form-control btn-outline-dark email" placeholder="County" aria-label="email" aria-describedby="basic-addon1">
                    <input type="text" class=" contact-3 form-control btn-outline-dark email" placeholder="Postcode" aria-label="email" aria-describedby="basic-addon1">
                </div>    
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
        <?php include 'footer.php' ?>
    
    </body>
