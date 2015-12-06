<?php // $Id: block_attendance.php,v 1.2 2006/10/27 09:40:09 dlnsk Exp $ 
      // block_attendance.php - created with Moodle 1.5.3+ (2005060230)

$string['pluginname'] = 'Auto Attendance Block';
$string['autoattend:addinstance'] = 'Add a new auto attendance block';
$string['autoattend:view'] = 'View block';

$string['Amethod']     = 'A';
$string['Smethod']     = 'S';
$string['Mmethod']     = 'M';
$string['Dmethod']     = 'N';
$string['Amethodfull'] = 'Automatic';
$string['Smethodfull'] = 'Semi Auto';
$string['Mmethodfull'] = 'Manual';
$string['Dmethodfull'] = 'Not Called';

$string['Cstate']     = 'C';
$string['Ostate']     = 'O';
$string['Nstate']     = 'N';
$string['Cstatefull'] = 'Closed';
$string['Ostatefull'] = 'Opened';
$string['Nstatefull'] = 'Not Started';

$string['Pacronym'] = 'P';
$string['Xacronym'] = 'A';
$string['Eacronym'] = 'E';
$string['Lacronym'] = 'L';
$string['Yacronym'] = 'N';
$string['Ptitle']   = 'P';
$string['Xtitle']   = 'A';
$string['Etitle']   = 'E';
$string['Ltitle']   = 'L';
$string['Ytitle']   = 'N';
$string['Pdesc'] = 'Present';
$string['Xdesc'] = 'Absent';
$string['Edesc'] = 'Early';
$string['Ldesc'] = 'Late';
$string['Ydesc'] = 'Not Called';
$string['Adesc'] = 'All Attendance';
$string['Zdesc'] = 'Absent or Not Called';

$string['acronym'] = 'Acronym';
$string['title'] = 'Title';
$string['add'] = 'Add';
$string['addmultiplesessions'] = 'Add Multiple Sessions';
$string['addsession'] = 'Add Session';
$string['alltaken'] = 'All taken';
$string['attendance'] = 'Attendance';
$string['changesession'] = 'Change Session';
$string['createmultiplesessions'] = 'Create multiple sessions';
$string['createonesession'] = 'Create one session';
$string['defaults'] = 'Defaults';
$string['delete'] = 'Delete';
$string['deletesession'] = 'Delete Session';
$string['deletingsession'] = 'Deleting Session in the Course';
$string['description'] = 'Description';
$string['display'] = 'Display';
$string['downloadexcel'] = ' Download in Excel ';
$string['downloadtext']  = ' Download in  Text ';
$string['duration_hour'] = 'Hour';
$string['editsession'] = 'Edit Session';
$string['errorinaddingsession'] = 'Error occurred in adding session';
$string['erroringeneratingsessions'] = 'Error occured in generating sessions ';
$string['indetail'] = 'In detail...';
$string['myvariables'] = 'Grade settings';
$string['newdate'] = 'New date';
$string['noattforuser'] = 'No attendances exist for the user';
$string['nodescription'] = 'nothing';
$string['novalue'] = '-';
$string['noofdaysabsent'] = 'No of days absent';
$string['noofdaysexcused'] = 'No of days excused';
$string['noofdayslate'] = 'No of days late';
$string['noofdayspresent'] = 'No of days present';
$string['nosessiondayselected'] = 'No Session day selected';
$string['nosessionexists'] = 'No Session exist in this course';
$string['olddate'] = 'Old date';
$string['period'] = 'Period';
$string['forprinting'] = 'For Printing';
$string['remarks'] = 'Remarks';
$string['report'] = 'Report';
$string['restoredefaults'] = 'Restore defaults';
$string['session'] = 'Session';
$string['sessionadded'] = 'Session successfully added';
$string['sessionalreadyexists'] = 'Session already exists in this date';
$string['sessiondate'] = 'Session Date';
$string['sessiondays'] = 'Session Days';
$string['sessiondeleted'] = 'Session successfully deleted';
$string['sessionenddate'] = 'Session End Date';
$string['sessionexist'] = 'Session not added (already exist)!';
$string['sessionscompleted'] = 'Completed';
$string['sessionsgenerated'] = 'Sessions successfully generated';
$string['sessionsnogenerated'] = 'There is no generated session';
$string['sessionstartdate'] = 'Session Start Date';
$string['sessionupdated'] = 'Session successfully updated';
$string['sessionupdateerror'] = 'Session update Error';
$string['grade_settings'] = 'Grade Settings';
$string['showdefaults'] = 'Show defaults';
$string['status'] = 'Status';

$string['strftimedmshort'] = '%d/%m';
$string['strftimedm'] = '%d/%m';
$string['strftimedmy'] = '%d/%m/%Y';
$string['strftimedmyw'] = '%d/%m/%y (%a)';
$string['strftimeshortdate'] = '%d/%m/%Y';
$string['strftimehourmin'] = '%H:%M';
$string['strftimehmshort'] = '%H:%M';
$string['strftimefull'] = '%H:%M %d/%m/%Y';
$string['strftimecalled'] = '%H:%M (%d/%m)';

$string['studentid'] = 'Student ID';
$string['takeattendance'] = 'Take Attendance';
$string['update'] = 'Update';
$string['updateordel'] = 'Update or Delete';
$string['updateuserattend'] = 'Update User Attendance';
$string['updatesessioninfo'] = 'Update Session Information';
$string['updatesessionattend'] = 'Update Session Attendance';
$string['variablesupdated'] = 'Grade variables successfully updated';
$string['variablesupdateerror'] = 'Grade variables update Error';
$string['months'] = 'Months';
$string['week'] = 'week(s)';
$string['weeks'] = 'Weeks';
$string['everyweeks']  = 'Every Weeks';
$string['everymonths'] = 'Every Months';
$string['missinfo'] = 'Missing need Information';
$string['return'] = 'Return';
$string['returnbutton'] = ' Return ';
$string['selectall'] = 'Select All';
$string['clearall']  = 'Clear All';
$string['deleteselect']  = ' Delete Select ';

$string['attendforthecourse'] = 'Attendance for the Course';
$string['attendforuser']      = 'Attendance for User in this Course';
$string['attendforsession']   = 'Attendance for the Session in this Course';
$string['attendgrade']        = 'Grade';
$string['attendgradeshort']   = 'G';
$string['attendnotstarted']   = 'Attendance has not started yet in this course';
$string['attendpercent']      = 'Percent';
$string['attendreport']       = 'Attendance Report';
$string['attendsuccess']      = 'Attendance has been successfully taken';
$string['attenderror']        = 'Attendance has been ERROR taken!!!';
$string['attendupdated']      = 'Attendance Successfully Updated';

$string['nosuchuser']    = 'No such user in this course';
$string['nosuchsession'] = 'No such session in this course';
$string['notaccessstudent'] = 'Students cannot access this page';
$string['notaccessnoteacher'] = 'Except for a teacher cannot access this page';
$string['notaccessguest'] = 'Guests cannot access this page';
$string['courseidwrong'] = 'Course ID is wrong';
$string['coursename'] = 'Course Name';
$string['wrongdatesselected'] = 'Wrong date selected';
$string['wrongtimesselected'] = 'Wrong time selected';
 
$string['add_session']   = 'Add Session';
$string['add_one']   = 'Add (one)';
$string['add_multi'] = 'Add (multi)';
$string['sdaysmiss'] = 'Missing days parameter';
$string['reqinfomiss'] = 'Required Information is missing';

$string['sessionmulti'] = 'Create multiple sessions';

$string['sessionmethod']       = 'Method';
$string['oldsessionmethod']    = 'Old Method';
$string['newsessionmethod']    = 'New Method';
$string['sessionstarttime']    = 'Start Time';
$string['oldsessionstarttime'] = 'Old Start Time';
$string['newsessionstarttime'] = 'New Start Time';
$string['sessionendtime']      = 'End Time';
$string['oldsessionendtime']   = 'Old End Time';
$string['newsessionendtime']   = 'New End Time';
$string['sessionlatetime']     = 'Late Time';
$string['oldsessionlatetime']  = 'Old Late Time';
$string['newsessionlatetime']  = 'New Late Time';
$string['sessionduration'] = 'Duration';
$string['oldsessionduration'] = 'Old Duration';
$string['newsessionduration'] = 'New Duration';
$string['sessionallowip']      = 'Allowed IPs';
$string['sessionallowip_help'] = 'The range of the IP addresses of the terminal which permits attendance are specified.
Basically format is list of "IP address/submetmask" that divided with the blank or the comma. But you can use the following forms, too<br />
<br />
* The prefix length notation is also possible instead of a subnetmask. <br />
&nbsp;&nbsp;&nbsp;&nbsp;202.26.155.0/16 => 202.26.0.0/255.255.0.0 <br />
<br />
* When a part of IP address is omitted, it is regarded as 0. <br />
&nbsp;&nbsp;&nbsp;&nbsp;202.26./255.255.255.0 => 202.26.0.0/255.255.255.0<br />
<br />
* When a parts of subnetmask is omitted, it is regarded as 0. <br />
&nbsp;&nbsp;&nbsp;&nbsp;202.26.100.2/255.255. => 202.26.0.0/255.255.0.0 <br />
&nbsp;&nbsp;&nbsp;&nbsp;202.26./255.255.255. => 202.26.0.0/255.255.255.0<br />
<br />
* When all subnet masks are omitted, the portion omitted by the IP address is 0. <br />
&nbsp;&nbsp;&nbsp;&nbsp;202. => 202.0.0.0/255.0.0.0<br />
<br />
ex.) 192.168.100. 202.26.144.0/255.255.255. 202.26.148.122 ';

$string['hourmin'] = 'Hour, Minute';
$string['hour'] = 'Hour';
$string['minute']  = 'Minute';
$string['correctuser']  = 'Correct';

$string['autoattendblock']  = 'Auto Attendance';
$string['autoattend']  = 'Auto Attendance';
$string['attendtable'] = 'Attendances';
$string['sessiontable'] = 'Sessions';
$string['takemanualattend'] = 'Attendance';
$string['calleddate'] = 'Called Date';
$string['calledtime'] = 'Time';
$string['callmethod'] = 'Method';
$string['callstate']  = 'State';

$string['deleteconfirm'] = 'Do you really delete?';
$string['semiautoconfirm'] = 'You can sumbit an attendance of below session. Do you submit an attendance?';
$string['returntoNconfirm'] = "Do you really return this session to 'Not Started' state?";
$string['returntoNdesc'] = "Even if you return this session to 'Not Started' state, attendances taken by manual and semi-auto mode are not cleared.";
$string['deleteok'] = 'Delete';
$string['attenddata'] = 'Attendance Data';
$string['attendkey']  = 'Attendance Keyword';
$string['attendkey_help'] = 'When taking attendance with the semiautomatic mode, 
the keyword (alphabet) which a student should input is specified.
When you check the "Random Key" checkbox, the small letter of five characters is generated automatically.<br />
In the case of automatic and a manual mode, this is disregarded.';

$string['denysameip'] = 'Deny same IP';
$string['starttime'] = 'Start';
$string['endtime']   = 'End';
$string['ipaddress']   = 'IP Address';
$string['ip']   = 'IP';
$string['notcallthis'] = 'You cannot call this script in that way';
$string['nevererror'] = 'Never Occur ERROR!!!';

$string['refreshdata'] = ' Refresh ';
$string['recalcgrades'] = 'Recalc Grades';
$string['keyword'] = 'Keyword';
$string['setrandomkey'] = 'Random Key';
$string['semiautoattend'] = 'Semi Automatic Attendance';
$string['submitattend'] = 'Submit Attendance';
$string['submitok'] = 'Submit';

$string['attendsubmitted'] = 'Attendance is submitted';
$string['attendsubmiterr'] = 'Error occurred in submitting attendance';
$string['mismatchkey'] = 'Not corresponding keyword';
$string['mismatchip'] = 'Your IP is not corresponding allowed IPs. Your IP is';
$string['sameusedip'] = 'Your IP is corresponding other used IPs. Your IP is';
$string['iperrattention']  = 'If you use web proxy, stop to use proxy for this attendance.';
$string['keyerrattention'] = 'Attendance keyword is mismatch. Please confirm keyword to your teacher.<br />And try again!!';
$string['needkeyword'] = 'This submition need keyword. Please input attendance keyword.';
$string['iperroccur']  = 'IP address error occurred.';
$string['keyerroccur'] = 'Attendance keyword error is occurred.';
$string['about'] = 'about';
$string['grade'] = 'G';
$string['returntoN'] = "return to 'Not Started'";
$string['toNok'] = 'OK';
$string['toNtitle'] = 'to Not Started';
$string['returnto_course'] = 'Return';

$string['class_settings'] = 'Class Settings';
$string['classname'] = 'Class';
$string['allclasses'] = 'All Classes';
$string['validclasses'] = 'Valid Classes';
$string['unknownclass'] = 'Unknown Class';
$string['nonclass'] = 'No Class';
$string['changeclass'] = 'Change Class';
$string['class_division'] = 'Classifications';
$string['deletingclasses'] = 'Deleting Classes in the Course';
$string['deleteconfirmclasses'] = 'At least one or more classes are already taken attendances.<br />Do you really delete them?';
$string['students_list'] = 'Users List';

//New: grouping
$string['choosegrouping'] = 'Choose Grouping';
$string['choosegrouping_help'] = 'Select a grouping. A class for each group in the grouping is created and the appropriate students will be included in it.';
$string['allgrouping'] = 'All Groups';
//--

$string['allstudents'] = 'All Students';
$string['exclusion'] = 'Excluded';
$string['excludedstudents'] = 'Excluded Students';

$string['monday']  = 'Mon.';
$string['tuesday'] = 'Tue.';
$string['wednesday'] = 'Wed.';
$string['thursday'] = 'Thu.';
$string['friday'] = 'Fri.';
$string['saturday'] = 'Sat.';
$string['sunday'] = 'Sun.';

$string['nowtime'] = 'Time Now';
$string['nowtime_help'] = 'When this  displayed time is not in same with the present time, 
the time of this autoattendance block are inaccurate. <br />
This inaccurate time occurs when user is admin．In that case, please set up a management user\'s timezone correctly.<br />
When a general user\'s (teacher) time does not correspond, probably, it is bug．Please send me bug report.';

$string['wiki_url'] = 'http://docs.moodle.org/25/en/Autoattendance_block';

$string['ipresolv'] = 'Reverse lookup URL of IP address';
$string['ipresolv_desc'] = 'URL for looking up the IP address of student\'s connection origin in reverse is specified.
An IP address portion is described to be %s';
$string['ipresolv_url'] = 'http://whois.arin.net/rest/nets;q=%s?showDetails=true';

$string['use_timeoffset'] = 'Use Timeoffset of the Timezone';
$string['use_timeoffset_desc'] = 'Timeoffset of the Timezone is used for Administrator.';

$string['output_idnumber'] = 'Output/Display idnumbers of students';
$string['output_idnumber_desc'] = 'idnumbers of students are included in download data and displayed at Report.';

$string['page_row_size'] = 'Row size of page';
$string['page_row_size_desc'] = 'A header is displayed for every number of lines of this.';
$string['page_column_size'] = 'Column size of page';
$string['page_column_size_desc'] = 'A user name is displayed for every number of columns of this.';

$string['email_teacher_attend'] = 'Attendace data of {$a->fullname} [{$a->date}] is attached to this mail.';
$string['email_teacher_key'] = 'The keyword of {$a->fullname} [{$a->date}] is {$a->key}';
$string['email_teacher_key_html'] = 'The keyword of {$a->fullname} [{$a->date}] is <strong>{$a->key}</strong>';

//
$string['feedback'] = 'Feedback';
$string['pleasefeedback'] = 'Please Feedback';
$string['removefeedback'] = '(this link can be turned OFF in settings of mod_autoattendmod Module)';

$string['repairdb'] = 'Repair of DB';
$string['repairdbconfirm'] = 'Do you execute to repair of DB?';
$string['repairok'] = 'Repair';
$string['dbrepaired'] = 'DB was repaired.';
