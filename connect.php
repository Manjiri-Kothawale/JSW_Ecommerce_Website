
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jsw shop</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">

    <style>
        body {
            background: #17469E;
        }
        
        .form-control:focus {
            box-shadow: none;
            border-color: #17469E;
        }
        
        .profile-button {
            background: #17469E;
            box-shadow: none;
            border: none;
        }
        
        .profile-button:hover,
        .profile-button:focus,
        .profile-button:active {
            background: #17469E;
            box-shadow: none;
        }
        
        .labels {
            font-size: 11px;
        }
        
    </style>
</head>
<body>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
      
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <form action="" method="POST">
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label class="labels">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="first name" value="<?php echo $name; ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Surname</label>
                                <input type="text" name="surname" class="form-control" placeholder="surname" value="<?php echo $surname; ?>">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">Mobile Number</label>
                                <input type="text" name="mobile_number" class="form-control" placeholder="enter phone number" value="<?php echo $mobile_number; ?>">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Address Line 1</label>
                                <input type="text" name="address_line1" class="form-control" placeholder="enter address line 1" value="<?php echo $address_line1; ?>">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Address Line 2</label>
                                <input type="text" name="address_line2" class="form-control" placeholder="enter address line 2" value="<?php echo $address_line2; ?>">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Postcode</label>
                                <input type="text" name="postcode" class="form-control" placeholder="enter postcode" value="<?php echo $postcode; ?>">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">State</label>
                                <input type="text" name="state" class="form-control" placeholder="enter state" value="<?php echo $state; ?>">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Area</label>
                                <input type="text" name="area" class="form-control" placeholder="enter area" value="<?php echo $area; ?>">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Email ID</label>
                                <input type="email" name="email" class="form-control" placeholder="enter email id" value="<?php echo $email; ?>">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Education</label>
                                <input type="text" name="education" class="form-control" placeholder="education" value="<?php echo $education; ?>">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label class="labels">Country</label>
                                <input type="text" name="country" class="form-control" placeholder="country" value="<?php echo $country; ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="labels">State/Region</label>
                                <input type="text" name="state_region" class="form-control" placeholder="state/region" value="<?php echo $state_region; ?>">
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
                        </div>
                    </form>
            
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="col-md-12">
                        <label class="labels">Additional Details</label>
                        <input type="text" name="additional_details" class="form-control" placeholder="additional_details" value="<?php echo $additional_details; ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
