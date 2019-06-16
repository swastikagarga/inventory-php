<?php

include('header.php');
include('conn.php');

$user = $_SESSION['userid'];

if(isset($_GET['id'])){
    $receiver = $_GET['id'];
    $chatuser =  mysqli_query($conn, "SELECT * FROM users WHERE userid='$receiver'");
    $chatrow = mysqli_fetch_array($chatuser);
    $msg_query = mysqli_query($conn, "SELECT * FROM message WHERE sender='$user' OR receiver='$user' OR sender='$receiver' OR receiver='$receiver'");
}



$query = mysqli_query($conn, "select * from users where userid!='$user'");

?>

<!-- MAIN CONTENT-->
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-comment-text"></i>User List</h3>
                                        
                                    </div>
                                    <div class="au-inbox-wrap js-inbox-wrap">
                                        <div class="au-message js-list-load">
                                        

                                            <div class="au-message-list">
                                            <?php while($row = mysqli_fetch_array($query)): ?>
                                            <div onclick="location.href='help.php?id=<?php echo $row['userid'];?>'" class="au-message__item unread">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap">
                                                                <div class="avatar">
                                                                    <?php if($row['userpic']!=null) : ?>
                                                                        <img src="<?php echo $row['userpic'] ?>" alt="John Smith">
                                                                    <?php else: ?>
                                                                        <?php if($row['gender'] == 2) : ?>
                                                                            <img src="images/female.jpg" alt="John Smith">
                                                                        <?php else: ?>
                                                                            <img src="images/male.jpg" alt="John Smith">
                                                                        <?php endif; ?>
                                                                    
                                                                    <?php endif; ?>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name"><?php echo $row['username']; ?></h5>
                                                                <p><?php echo $row['status']; ?></p>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>

                                            <?php endwhile; ?> 
                                                
                                            </div>
                                            
                                        </div>
                                        <div class="au-chat">
                                            <div class="au-chat__title">
                                                <div class="au-chat-info">
                                                    <div class="avatar-wrap online">
                                                        <div class="avatar avatar--small">
                                                            <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                                        </div>
                                                    </div>
                                                    <span class="nick">
                                                        <a href="#">John Smith</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="au-chat__content">
                                                <div class="recei-mess-wrap">
                                                
                                                    <span class="mess-time">12 Min ago</span>
                                                    <div class="recei-mess__inner">
                                                        <div class="avatar avatar--tiny">
                                                            <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                                        </div>
                                                        <div class="recei-mess-list">
                                                            <div class="recei-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                            <div class="recei-mess">Donec tempor, sapien ac viverra</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="send-mess-wrap">
                                                    <span class="mess-time">30 Sec ago</span>
                                                    <div class="send-mess__inner">
                                                        <div class="send-mess-list">
                                                            <div class="send-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="au-chat-textfield">
                                                <form class="au-form-icon">
                                                    <input class="au-input au-input--full au-input--h65" type="text" placeholder="Type a message">
                                                    <button class="au-input-icon">
                                                        <i class="zmdi zmdi-camera"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php if(isset($_GET['id'])): ?>
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40 au-card--border">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-comment-text"></i>Chat</h3>
                                        <button class="au-btn-plus">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                    </div>
                                    <div class="au-inbox-wrap">
                                        <div class="au-chat au-chat--border">
                                            <div class="au-chat__title">
                                                <div class="au-chat-info">
                                                    <div class="avatar-wrap online">
                                                        <div class="avatar avatar--small">
                                                            <?php if($chatrow['userpic']!=null): ?>
                                                            <img src="<?php echo $chatrow['userpic']; ?>" alt="John Smith">
                                                            <?php elseif($chatrow['gender']==2): ?>
                                                            <img src="images/female.jpg" alt="John Smith">
                                                            <?php else: ?>
                                                            <img src="images/male.jpg" alt="John Smith">
                                                            <?php endif; ?>
                                                            <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                                        </div>
                                                    </div>
                                                    <span class="nick">
                                                        <a href="#"><?php echo $chatrow['username']; ?></a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="au-chat__content au-chat__content2 js-scrollbar5">

                                            <?php while($row = mysqli_fetch_array($msg_query)): ?>
                                                        
                                                <?php if($receiver==$row['receiver']): ?>
                                                    <div class="send-mess-wrap">
                                                        <span class="mess-time"><?php echo $row['time'];?></span>
                                                        <div class="send-mess__inner">
                                                            <div class="send-mess-list">
                                                                <div class="send-mess"><?php echo $row['message'];?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php elseif($user==$row['sender'] || $user==$row['receiver']): ?>

                                                    <div class="recei-mess-wrap">
                                                    <span class="mess-time"><?php echo $row['time'];?></span>
                                                    <div class="recei-mess__inner">
                                                        <div class="avatar avatar--tiny">
                                                            <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                                        </div>
                                                        <div class="recei-mess-list">
                                                            <div class="recei-mess"><?php echo $row['message']; ?></div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                        
                                                    <?php endif; ?>
                                            <?php endwhile; ?>
                                                
                                                
                                            </div>
                                            <div class="au-chat-textfield">
                                                <form class="au-form-icon" action="chatting.php" method="post">
                                                    <input type="hidden" name="sender" value="<?php echo $_SESSION['userid']; ?>">
                                                    <input type="hidden" name="receiver" value="<?php echo $_GET['id']; ?>">
                                                    <input class="au-input au-input--full au-input--h65" name="message" type="text" placeholder="Type a message">
                                                    <button type="submit" class="au-input-icon">
                                                        <i class="zmdi zmdi-mail-send"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>