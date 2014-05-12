/*
Start Directory - To list the files contained within the current 
directory enter '.', otherwise enter the path to the directory 
you wish to list. The path must be relative to the current 
directory.
*/
$startDir = '.';

/*
Show Thumbnails? - Set to true if you wish to use the 
scripts auto-thumbnail generation capabilities.
This requires that GD2 is installed.
*/
$showThumbnails = true; 

/*
Show Directories - Do you want to make subdirectories available?
If not set this to false
*/
$showDirs = true;

/* 
Force downloads - Do you want to force people to download the files
rather than viewing them in their browser?
*/
$forceDownloads = false;

/*
Hide Files - If you wish to hide certain files or directories 
then enter their details here. The values entered are matched
against the file/directory names. If any part of the name 
matches what is entered below then it is now shown.
*/
$hide = array(
				'dirlist',
				'index.php',
				'.htaccess',
				'.htpasswd'
			);
			 
/* 
Show index files - if an index file is found in a directory
to you want to display that rather than the listing output 
from this script?
*/			
$displayIndex = false;

/*
Overwrite files - If a user uploads a file with the same
name as an existing file do you want the existing file
to be overwritten?
*/
$overwrite = false;

/*
Index files - The follow array contains all the index files
that will be used if $displayindex (above) is set to true.
Feel free to add, delete or alter these
*/

$indexFiles = array (
				'index.html',
				'index.htm',
				'default.htm',
				'default.html'
			);
			
/*
File Icons - If you want to add your own special file icons use 
this section below. Each entry relates to the extension of the 
given file, in the form <extension> => <filename>. 
These files must be located within the dirlist directory.
*/
$filetypes = array (
				'jpeg' => 'jpg.png',
				'bmp' => 'bmp.png',
				'jpg' => 'jpg.png', 
				'gif' => 'gif.png',
				'zip' => 'zip.png',
				'exe' => 'exe.png',
				'setup' => 'setup.gif',
				'htm' => 'html.png',
				'html' => 'html.png',
				'fla' => 'fla.gif',
				'swf' => 'swf.gif',
				'doc' => 'doc.png',
				'sig' => 'sig.gif',
				'fh10' => 'fh10.gif',
				'pdf' => 'pdf.png',
				'rm' => 'real.gif',
				'mpg' => 'mpg.png',
				'mpeg' => 'mpg.png',
				'mov' => 'video2.gif',
				'avi' => 'avi.png',
				'eps' => 'eps.png',
				'gz' => 'archive.png',
				'asc' => 'sig.gif',
				'aac' => 'aac.png',
				'ai' => 'ai.png',
				'aiff' => 'aiff.png',
				'cpp' => 'cpp.png',
				'css' => 'css.png',
				'dat' => 'dat.png',
				'dmg' => 'dmg.png',
				'dotx' => 'dotx.png',
				'dwg' => 'dwg.png',
				'dxf' => 'dxf.png',
				'flv' => 'flv.png',
				'h' => 'h.png',
				'hpp' => 'hpp.png',
				'ics' => 'ics.png',
				'iso' => 'iso.png',
				'java' => 'java.png',
				'jar' => 'java.png',
				'js' => 'js.png',
				'key' => 'key.png',
				'less' => 'less.png',
				'mid' => 'mid.png',
				'mp3' => 'mp3.png',
				'mp4' => 'mp4.png',
				'odf' => 'odf.png',
				'ods' => 'ods.png',
				'odt' => 'odt.png',
				'otp' => 'otp.png',
				'ots' => 'ots.png',
				'ott' => 'ott.png',
				'php' => 'php.png',
				'png' => 'png.png',
				'psd' => 'psd.png',
				'py' => 'py.png',
				'qt' => 'qt.png',
				'rar' => 'rar.png',
				'rb' => 'rb.png',
				'rtf' => 'rtf.png',
				'sass' => 'sass.png',
				'scss' => 'scss.png',
				'sql' => 'sql.png',
				'tga' => 'tga.png',
				'tgz' => 'tgz.png',
				'tiff' => 'tiff.png',
				'txt' => 'txt.png',
				'wav' => 'wav.png',
				'xls' => 'xls.png',
				'xlsx' => 'xlsx.png',
				'xml' => 'xml.png',
				'yml' => 'yml.png'
			);
			
/*
That's it! You are now ready to upload this script to the server.

Only edit what is below this line if you are sure that you know what you
are doing!
*/