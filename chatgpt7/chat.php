<?php 
session_start();
include_once "php/config.php";

if (!isset($_SESSION['unique_id'])) {
    header("location: login.php");
    exit();
}
include_once "header.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatApp - WhatsApp Style Chat UI</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #e5ddd5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .wrapper {
            display: flex;
            width: 90vw;
            height: 90vh;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .users {
            width: 30%;
            background-color: #075e54;
            color: #fff;
            display: flex;
            flex-direction: column;
            padding: 10px;
            border-right: 1px solid #d3d3d3;
            overflow-y: auto;
        }

        .users header {
            display: flex;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #d3d3d3;
        }

        .users header .content {
            display: flex;
            align-items: center;
        }

        .users header img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 5px;
        }

        .search {
            padding: 10px;
        }

        .search input {
            width: 100%;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #d3d3d3;
            margin-top: 5px;
            font-size: 12px;
        }

        .search button {
            background-color: #25D366;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px;
            cursor: pointer;
            margin-top: 5px;
            width: 100%;
            font-size: 12px;
        }

        .users-list {
            padding: 5px;
            font-size: 12px;
            overflow-y: auto;
        }

        .chat-area {
            width: 70%;
            display: flex;
            flex-direction: column;
            padding: 10px;
        }

        .chat-area header {
            display: flex;
            align-items: center;
            border-bottom: 1px solid #d3d3d3;
            padding-bottom: 5px;
        }

        .chat-area header img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 5px;
        }

        .chat-box {
            flex-grow: 1;
            overflow-y: auto;
            border: 1px solid #d3d3d3;
            padding: 5px;
            background-color: #ffffff;
            border-radius: 5px;
        }

        .typing-area {
            display: flex;
            padding: 5px;
            border-top: 1px solid #d3d3d3;
            background-color: #f9f9f9;
            border-radius: 5px;
        }

        .typing-area input {
            flex: 1;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #d3d3d3;
            font-size: 12px;
        }

        .typing-area button {
            background-color: #25D366;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px;
            cursor: pointer;
            font-size: 12px;
        }

        @media screen and (max-width: 768px) {
            body {
                font-size: 12px;
            }
            .search input {
                font-size: 10px;
                padding: 4px;
            }
            .search button {
                font-size: 10px;
                padding: 4px;
            }
            .users-list {
                font-size: 10px;
            }
            .chat-area header span,
            .chat-area header p {
                font-size: 12px;
            }
            .typing-area input {
                font-size: 10px;
                padding: 4px;
            }
            .typing-area button {
                font-size: 10px;
                padding: 4px;
            }
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <section class="users">
            <header>
                <div class="content">
                    <?php 
                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                    if (mysqli_num_rows($sql) > 0) {
                        $row = mysqli_fetch_assoc($sql);
                    }
                    ?>
                    <img src="php/images/<?php echo $row['img']; ?>" alt="" style="width: 40px; height: 40px; border-radius: 50%; margin-right: 5px;">
                    <div class="details">
                        <span style="font-weight: bold; font-size: 14px;"><?php echo $row['fname'] . " " . $row['lname']; ?></span>
                        <p style="color: #888; font-size: 12px;"><?php echo $row['status']; ?></p>
                    </div>
                </div>
                <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout" style="margin-left: auto; color: #ff0000; font-size: 12px;">Logout</a>
            </header>
            <div class="search">
                <span class="text" style="font-weight: bold; font-size: 14px;">Select a user to start chat</span>
                <input type="text" placeholder="Enter name to search...">
                <button>
                    <i class="fas fa-search"></i> Search
                </button>
            </div>
            <div class="users-list">
                <!-- Users will be dynamically loaded here -->
            </div>
        </section>

        <section class="chat-area">
            <?php 
            if (isset($_GET['user_id'])) {
                $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
                
                if (mysqli_num_rows($sql) > 0) {
                    $row = mysqli_fetch_assoc($sql);
                } else {
                    header("location: users.php");
                    exit();
                }
            ?>
            <header>
                <a href="users.php" class="back-icon" style="color: #25D366; margin-right: 5px; font-size: 14px;"><i class="fas fa-arrow-left"></i></a>
                <img src="php/images/<?php echo $row['img']; ?>" alt="" style="width: 40px; height: 40px; border-radius: 50%; margin-right: 5px;">
                <div class="details">
                    <span style="font-weight: bold; font-size: 14px;"><?php echo $row['fname'] . " " . $row['lname']; ?></span>
                    <p style="color: #888; font-size: 12px;"><?php echo $row['status']; ?></p>
                </div>
            </header>
            <div class="chat-box">
                <!-- Chat messages will be dynamically loaded here -->
            </div>
            <form action="#" class="typing-area">
                <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
                <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
                <button>
                    <i class="fab fa-telegram-plane"></i>
                </button>
            </form>
            <?php 
            } else {
                echo '<p style="text-align: center; font-weight: bold; margin-top: 20px; font-size: 14px;">Select a user from the left to start chatting.</p>';
            }
            ?>
        </section>
    </div>

    <script src="javascript/chat.js"></script>
    <script src="javascript/users.js"></script>
</body>
</html>
