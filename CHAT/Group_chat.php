<?php
if (isset($_POST['submit'])) {
    /* Attempt MySQL server connection. Assuming
      you are running MySQL server with default
      setting (user 'root' with no password) */
    $link = mysqli_connect("localhost",
            "root", "", "BD_PHARMADIGITAL");

// Check connection
    if ($link === false) {
        die("ERROR: Could not connect. "
                . mysqli_connect_error());
    }

// Escape user inputs for security
    $un = mysqli_real_escape_string(
            $link, $_REQUEST['nome']);
    $m = mysqli_real_escape_string(
            $link, $_REQUEST['msg']);
    date_default_timezone_set('Asia/Kolkata');
    $ts = date('y-m-d h:ia');

// Attempt insert query execution
    $sql = "INSERT INTO chats (nome, msg, dt)
        VALUES ('$un', '$m', '$ts')";
    if (mysqli_query($link, $sql)) {
        ;
    } else {
        echo "ERROR: Message not sent!!!";
    }
    // Close connection
    mysqli_close($link);
}
?>
<html>
    <head>
        <style>
            *{
                box-sizing:border-box;
            }
            body{
                background-color:#abd9e9;
                font-family:Arial;
            }
            #container{
                width:500px;
                height:700px;
                background:white;
                margin:0 auto;
                font-size:0;
                border-radius:5px;
                overflow:hidden;
            }
            main{
                width:500px;
                height:700px;
                display:inline-block;
                font-size:15px;
                vertical-align:top;
            }
            main header{
                height:100px;
                padding:30px 20px 30px 40px;
                background-color:#054F77;  
            }
            main header > *{
                display:inline-block;
                vertical-align:top;
            }
            main header img:first-child{
                width:60px;
                margin-top:-10px;
            }  
            main header img:last-child{
                width:60px;
                margin-top:8px;
            }
            main header div{
                margin-left:90px;
                margin-right:90px;
            }
            main header h2{
                font-size:25px;
                margin-top:5px;
                text-align:center;
                color:#FFFFFF;  
            }
            main .inner_div{
                padding-left:0;
                margin:0;
                list-style-type:none;
                position:relative;
                overflow:auto;
                height:500px;
                background-position:center;
                background-repeat:no-repeat;
                background-size:cover;
                position: relative;
                border-top:2px solid #fff;
                border-bottom:2px solid #fff;

            }
            main .triangle{
                width: 0;
                height: 0;
                border-style: solid;
                border-width: 0 8px 8px 8px;
                border-color: transparent transparent
                    #58b666 transparent;
                margin-left:20px;
                clear:both;
            }
            main .message{
                padding:10px;
                color:#000;
                margin-left:15px;
                background-color:#0772EB;
                line-height:20px;
                max-width:90%;
                display:inline-block;
                text-align:left;
                border-radius:5px;
                clear:both;
            }
            main .triangle1{
                width: 0;
                height: 0;
                border-style: solid;
                border-width: 0 8px 8px 8px;
                border-color: transparent
                    transparent #6fbced transparent;
                margin-right:20px;
                float:right;
                clear:both;
            }
            main .message1{
                padding:10px;
                color:#000;
                margin-right:15px;
                background-color:#6fbced;
                line-height:20px;
                max-width:90%;
                display:inline-block;
                text-align:left;
                border-radius:5px;
                float:right;
                clear:both;
            }

            main footer{
                height:150px;
                padding:20px 30px 10px 20px;
                background-color:#054F77;
            }
            main footer .input1{
            
                width:120%;
                height:55px;
                 border: solid 1.5px #9e9e9e;
 border-radius: 1rem;
 background: none;
 padding: 1rem;
 font-size: 1rem;
 color: #f5f5f5;
 transition: border 150ms cubic-bezier(0.4,0,0.2,1);
            }
            main footer textarea{
                 border: solid 1.5px #9e9e9e;
 border-radius: 1rem;
 background: none;
 padding: 1rem;
 font-size: 1rem;
 color: #f5f5f5;
 transition: border 150ms cubic-bezier(0.4,0,0.2,1);
border-bottom: 10px;
                resize:none;
                border:100%;
                display:block;
                width:140%;
                height:55px;
                border-radius:3px;
                padding:20px;
                font-size:13px;
                margin-bottom:13px;
                margin-left:20px;
            }
            main footer .input2{
                resize:none;
                border:100%;
                display:block;
                width:40%;
              
                height:55px;
                border-radius:3px;
                padding:20px;
                font-size:13px;
                margin-bottom:13px;
                margin-left:100px;
                color:white;
                text-align:center;
                background-color:black;
                border: 2px solid white; 
            }

            main footer textarea::placeholder{
                color:#ddd;
            }

        </style>
    <body onload="show_func()">
        <div id="container">
            <main>
                <header>
                    <img src="../IMAGENS/favicon (3).ico" alt="">
                    <div>
                        <h2> Pharma Digital</h2>
                    </div>
                   
                </header>

                <script>
                    function show_func() {

                        var element = document.getElementById("chathist");
                        element.scrollTop = element.scrollHeight;

                    }
                </script>

                <form id="myform" action="Group_chat.php" method="POST" >
                    <div class="inner_div" id="chathist">
                        <?php
                        $host = "localhost";
                        $user = "root";
                        $pass = "";
                        $db_name = "BD_PHARMADIGITAL";
                        $con = new mysqli($host, $user, $pass, $db_name);

                        $query = "SELECT * FROM chats";
                        $run = $con->query($query);
                        $i = 0;

                        while ($row = $run->fetch_array()) :
                            if ($i == 0) {
                                $i = 5;
                                $first = $row;
                                ?>
                                <div id="triangle1" class="triangle1"></div>
                                <div id="message1" class="message1">
                                    <span style="color:white;float:right;">
                                        <?php echo $row['msg']; ?></span> <br/>
                                    <div>
                                        <span style="color:black;float:left;
                                              font-size:10px;clear:both;">
                                            <?php echo $row['nome']; ?>,
                                            <?php echo $row['dt']; ?>
                                        </span>
                                    </div>
                                </div>
                                <br/><br/>
                                <?php
                            } else {
                                if ($row['nome'] != $first['nome']) {
                                    ?>
                                    <div id="triangle" class="triangle"></div>
                                    <div id="message" class="message">
                                        <span style="color:white;float:left;">
            <?php echo $row['msg']; ?>
                                        </span> <br/>
                                        <div>
                                            <span style="color:black;float:right;
                                                  font-size:10px;clear:both;">
            <?php echo $row['nome']; ?>,
            <?php echo $row['dt']; ?>
                                            </span>
                                        </div>
                                    </div>
                                    <br/><br/>
            <?php
        } else {
            ?>
                                    <div id="triangle1" class="triangle1"></div>
                                    <div id="message1" class="message1">
                                        <span style="color:white;float:right;">
                                    <?php echo $row['msg']; ?>
                                        </span> <br/>
                                        <div>
                                            <span style="color:black;float:left;
                                                  font-size:10px;clear:both;">
                                            <?php echo $row['nome']; ?>,
            <?php echo $row['dt']; ?>
                                            </span>
                                        </div>
                                    </div>
                                    <br/><br/>
                                                <?php
                                            }
                                        }
                                    endwhile;
                                    ?>
                    </div>
                    <footer>
                        <table>
                            <tr>
                                <th>
                                    <input  class="input1" type="text"
                                            id="uname" name="nome"
                                            placeholder="Para">
                                </th>
                                <th>
                                    <textarea id="msg" name="msg"
                                              rows='3' cols='50'
                                              placeholder="Mensagem">
                                    </textarea></th>
                                <th>
                                    <input class="input2" type="submit"
                                           id="submit" name="submit" value="Enviar">
                                </th>               
                            </tr>
                        </table>               
                    </footer>
                </form>
            </main>   
        </div>

    </body>
</html>