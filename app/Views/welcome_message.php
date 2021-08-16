<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Codeigniter</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-danger text-white-50 ">
  		<a class="navbar-brand " href="#">Crud with Cordigniter</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   		<span class="navbar-toggler-icon"></span>
  		</button>
  </div>
</nav>
<br/>
<main id="Item-Content">
    <section class="row">
        <div class="col-4  " >
            <form class="mx-5 mt-5">
                <div class="mb-3">
                    <label class="form-label">Customer ID</label>
                    <input type="text" class="form-control" >
                  
                </div>
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control" >
                 
                </div>
                <div class="mb-3">
                    <label  class="form-label">Email</label>
                    <input type="text" class="form-control"  >
                  
                </div>
                <div class="mb-3">
                    <label   class="form-label">Address</label>
                    <input type="text" class="form-control"  >
                  
                </div>
				<div class="mb-3">
                    <label   class="form-label">Contact</label>
                    <input type="text" class="form-control" >
                  
                </div>

                <button  type="button" class="btn btn-primary mt-2" id="btnSaveItem">Save Customer</button>
                <button  type="button" class="btn btn-warning mt-2 mx-2" id="btnUpdateItem">Update Customer </button>
                <button  type="button" class="btn btn-danger mt-2 " id="btnDeleteItem">Delete </button>
              
            </form>
        </div >
        <div class="col-7">
            <table class="table table-bordered table-hover mt-5 mx-5">
                <thead class="bg-secondary text-black-50">
                <tr>
					<th>Customer ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    
                </tr>
                </thead>
                <tbody class="bg-light " id="tblItem">

                </tbody>
            </table>
        </div>
    </section>
</main>
  
</form>
</body>
</html>