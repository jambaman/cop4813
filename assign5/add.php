
<div id="form_wrapper">
            <form id="form" name="form" method="post" action="addEmployee.php">
                <h1>Add New Employee</h1>
                    <div class="col-1">
 
                        <label >First Name</label>

                        <label >Last Name</label>
                        
                        <label >Email</label>
 
                        <label >Phone
                        <span class="small">Example:  9999999999</span>
                        </label>
 
                        <label >Gender
                        <span class="small">Enter your gender</span>
                        </label>
                         <label>Manager
                        <span class="small">Is Employee a Manager</span>
                        </label>
 
                         <label>Department
                        <span class="small">Choose Employee's Department</span>
                        </label>
                        
                    </div>
                    <div class="col-2">
 
                        <input type="text" name="firstname" id="fname" required/>
                        <input type="text" name="lastname" id="lname" required/>
 
                        <input type="text" name="email" id="email"  required />
 
                        <input type="text" name="phone" id="phone" required/>
 
                        <input type="radio" name="gender" value="male" required/> Male
                        <input type="radio" name="gender" value="female"/>Female<br>
                         <input name="manager" value="yes" type="checkbox"> Yes
                        <select name="department">
                            <option>Operations</option>
                            <option>Sales</option>
                            <option>Dispatch</option>
                        </select>
                        </div>
 
                    <center>
                      <button type="submit">Add Employee</button>
                    </center>
 
            </form>
 
</div>