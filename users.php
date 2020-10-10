<?php
require('header.php');

?>

		<div class="section">
	
			<h1 align="center">Users</h1>	
            <form action="" method="post">
                <input type="search" name="search" placeholder="searching...">
            </form>
            <table>
                <thead>
                    <tr>
                        <th> S/N</th>
                        <th> Name</th>
                        <th> Email</th>
                        <th> Phone</th>
                        <th> Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Muhammad Auwal Tahir</td>
                        <td>muhdtahir619@gmail.com</td>
                        <td>+2348012345678</td>
                        <td>
                            <button id="view">view</button>
                            <button id="edit">edit</button>
                            <button id="delete">delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>


		</div> 
</body>
</html>