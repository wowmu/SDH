
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">

        <ul id="main-menu" class="nav side-menu">
            <!-- add class "multiple-expanded" to allow multiple submenus to open -->
            <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->


            <!-- DASHBOARD -->
            <li class="<?php if ($page_name == 'dashboard') echo 'active'; ?> ">
                <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/dashboard">
                    <i class="entypo-gauge"></i>
                    <span><?php echo get_phrase('dashboard'); ?></span>
                </a>
            </li>

           <!-- STUDENT -->
            <li class="<?php
            if ($page_name == 'student_add' ||
                    $page_name == 'student_information' ||
                    $page_name == 'student_marksheet')
                echo 'opened active has-sub';
            ?> ">
                <a href="#">
                    <i class="fa fa-group"></i>
                    <span><?php echo get_phrase('student'); ?></span><span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                    <!-- STUDENT ADMISSION -->
                    <li class="<?php if ($page_name == 'student_add') echo 'active'; ?> ">
                        <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/student_add">
                            <span> <?php echo get_phrase('admit_student'); ?></span>
                        </a>
                    </li>

                    <!-- STUDENT INFORMATION -->
                    <li class="<?php if ($page_name == 'student_information' || $page_name == 'student_marksheet') echo 'opened active'; ?> ">
                        <a href="#">
                            <span> <?php echo get_phrase('student_information'); ?></span><span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu">
                            <?php
                            $classes = $this->db->get('class')->result_array();
                            foreach ($classes as $row):
                                ?>
                                <li class="<?php if ($page_name == 'student_information' && $class_id == $row['class_id']) echo 'active'; ?>">
                                    <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/student_information/<?php echo $row['class_id']; ?>">
                                        <span><?php echo get_phrase('class'); ?> <?php echo $row['name']; ?></span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>

                </ul>
            </li>

            <!-- TEACHER -->
            <li class="<?php if ($page_name == 'teacher') echo 'active'; ?> ">
                <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/teacher_list">
                    <i class="entypo-users"></i>
                    <span><?php echo get_phrase('teacher'); ?></span>
                </a>
            </li>

            <!-- TODAYS THOUGHT -->
            <li class="<?php if ($page_name == 'academic_syllabus') echo 'active'; ?> ">
                <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/academic_syllabus">
                    <i class="entypo-book"></i>
                    <span><?php echo get_phrase('academic_syllabus'); ?></span>
                </a>
            </li>



            <!-- SUBJECT -->
            <li class="<?php if ($page_name == 'subject') echo 'opened active'; ?> ">
                <a href="#">
                    <i class="entypo-docs"></i>
                    <span><?php echo get_phrase('subject'); ?></span><span class="fa fa-chevron-down"></span>
                </a>
                <ul>
                    <?php
                    $classes = $this->db->get('class')->result_array();
                    foreach ($classes as $row):
                        ?>
                        <li class="<?php if ($page_name == 'subject' && $class_id == $row['class_id']) echo 'active'; ?>">
                            <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/subject/<?php echo $row['class_id']; ?>">
                                <span><?php echo get_phrase('class'); ?> <?php echo $row['name']; ?></span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>

            <!-- CLASS ROUTINE -->
            <li class="<?php if ($page_name == 'class_routine') echo 'active'; ?> ">
                <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/class_routine">
                    <i class="entypo-target"></i>
                    <span><?php echo get_phrase('class_routine'); ?></span>
                </a>
            </li>

            <!-- STUDY MATERIAL -->
            <li class="<?php if ($page_name == 'study_material') echo 'active'; ?> ">
                <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/study_material">
                    <i class="entypo-book-open"></i>
                    <span><?php echo get_phrase('study_material'); ?></span>
                </a>
            </li>

            <!-- HOLIDAYS -->
            <li class="<?php if ($page_name == 'holiday') echo 'active'; ?> ">
                <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/holiday">
                    <i class="entypo-docs"></i>
                    <span><?php echo get_phrase('holidays'); ?></span>
                </a>
            </li>

            <!-- TODAYS THOUGHT -->
            <li class="<?php if ($page_name == 'todays_thought') echo 'active'; ?> ">
                <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/todays_thought">
                    <i class="fa fa-book"></i>
                    <span><?php echo get_phrase('todays_thought'); ?></span>
                </a>
            </li>



            <!-- MANAGE EXAM QUESTIONS -->
            <li class="<?php if ($page_name == 'examquestion') echo 'active'; ?> ">
                <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/examquestion">
                    <i class="fa fa-check"></i>
                    <span><?php echo get_phrase('submit_exam_questions'); ?></span>
                </a>
            </li>


            <!-- LOAN APPLICATION -->
            <li class="<?php if ($page_name == 'loan_applicant') echo 'active'; ?> ">
                <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/loan_applicant">
                    <i class="fa fa-dollar"></i>
                    <span><?php echo get_phrase('loan_application'); ?></span>
                </a>
            </li>


            <!-- LOAN APPROVAL -->

            <li class="<?php if ($page_name == 'loan_approval') echo 'active'; ?> ">
                <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/loan_approval/<?php echo $this->session->userdata('login_user_id'); ?>">
                    <i class="fa fa-check"></i>
                    <span><?php echo get_phrase('loan_approval_status'); ?></span>
                </a>
            </li>

            <!-- TODAYS THOUGHT -->
            <li class="<?php if ($page_name == 'assignment') echo 'active'; ?> ">
                <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/assignment">
                    <i class="fa fa-book"></i>
                    <span><?php echo get_phrase('assignments'); ?></span>
                </a>
            </li>


            <!-- TODAYS THOUGHT -->
            <li class="<?php if ($page_name == 'help_link') echo 'active'; ?> ">
                <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/help_link">
                    <i class="entypo-book"></i>
                    <span><?php echo get_phrase('helpful_link'); ?></span>
                </a>
            </li>


            <!-- DAILY ATTENDANCE -->
            <li class="<?php if ($page_name == 'manage_attendance') echo 'active'; ?> ">
                <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/manage_attendance/<?php echo date("d/m/Y"); ?>">
                    <i class="entypo-chart-area"></i>
                    <span><?php echo get_phrase('daily_attendance'); ?></span>
                </a>

            </li>

            <!-- TODAYS THOUGHT -->
            <li class="<?php if ($page_name == 'news') echo 'active'; ?> ">
                <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/news">
                    <i class="fa fa-book"></i>
                    <span><?php echo get_phrase('all_news'); ?></span>
                </a>
            </li>

            <!-- EXAMS -->
            <li class="<?php
            if ($page_name == 'exam' ||
                    $page_name == 'grade' ||
                    $page_name == 'marks')
                echo 'opened active';
            ?> ">
                <a href="#">
                    <i class="entypo-graduation-cap"></i>
                    <span><?php echo get_phrase('exam'); ?></span><span class="fa fa-chevron-down"></span>
                </a>
                <ul>

                    <li class="<?php if ($page_name == 'marks') echo 'active'; ?> ">
                        <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/marks">
                            <span><?php echo get_phrase('manage_marks'); ?></span>
                        </a>
                    </li>
                </ul>
            </li>


            <!-- LIBRARY -->
            <li class="<?php if ($page_name == 'book') echo 'active'; ?> ">
                <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/book">
                    <i class="entypo-book"></i>
                    <span><?php echo get_phrase('library'); ?></span>
                </a>
            </li>

            <!-- TRANSPORT -->
            <li class="<?php if ($page_name == 'transport') echo 'active'; ?> ">
                <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/transport">
                    <i class="entypo-location"></i>
                    <span><?php echo get_phrase('transport'); ?></span>
                </a>
            </li>

            <!-- NOTICEBOARD -->
            <li class="<?php if ($page_name == 'noticeboard') echo 'active'; ?> ">
                <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/noticeboard">
                    <i class="entypo-doc-text-inv"></i>
                    <span><?php echo get_phrase('noticeboard'); ?></span>
                </a>
            </li>

            <!-- MESSAGE -->
            <li class="<?php if ($page_name == 'message') echo 'active'; ?> ">
                <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/message">
                    <i class="entypo-mail"></i>
                    <span><?php echo get_phrase('message'); ?></span>
                </a>
            </li>

            <!-- ACCOUNT -->
            <li class="<?php if ($page_name == 'manage_profile') echo 'active'; ?> ">
                <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/manage_profile">
                    <i class="entypo-lock"></i>
                    <span><?php echo get_phrase('account'); ?></span>
                </a>
            </li>

        </ul>

    </div>
</div>