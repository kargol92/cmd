<?php
	include "sys.php";
	$title = $cmd . " linux";
	include "header.php";
	include "nav-linux.php";
?>

<h2><i class="fab fa-linux"></i> GNU Linux (BASH) [Debian-based distros]</h2>
<section>

	<article id="introduction">
		<hr>
		<h3><i class="far fa-play-circle"></i> <?=$introduction?></h3>
		<hr>
		<?php if ($lang == "en") { ?>
			<h4>What is GNU Linux?</h4>
			<p>
				<a target="_blank" href="https://www.gnu.org">GNU</a> <a target="_blank" href="https://www.kernel.org">Linux</a> is an open source operating system.
			</p>

			<h4>What is BASH?</h4>
			<p>
				<a target="_blank" href="http://www.gnu.org/software/bash">BASH (Bourne Again SHell)</a> is the most popular shell for Linux terminal.
			</p>

			<h4>What is Debian?</h4>
			<p>
				<a target="_blank" href="https://www.debian.org">Debian</a> is an important GNU Linux distribution. Many other distros are derived from Debian, such as <a target="_blank" href="https://ubuntu.com">Ubuntu</a> or <a target="_blank" href="https://www.linuxmint.com">Linux Mint</a>.
			</p>

			<h4>How can we use GNU Linux?</h4>
			<p>
				On most distributions (e.g. <a target="_blank" href="https://ubuntu.com/download/desktop">Ubuntu (Desktop)</a>, <a target="_blank" href="https://www.linuxmint.com">Linux Mint</a>), we can use it with CLI (Command-Line Interface) and GUI (Graphical User Interface).
			</p>
			<p>
				There are distributions that do not have a GUI installed by default. Typically, these are versions used as server operating systems, such as <a target="_blank" href="https://ubuntu.com/download/server">Ubuntu Server</a>.
			</p>
			<p>
				If we are just using a Graphical User Interface, we can run a terminal emulator (pseudoterminal) or go to the Command Line Interface.
			</p>

			<h4>How to run the terminal in GUI (Graphical User Interface)?</h4>
			<p>
				On most distributions, click the menu button or press <kbd><i class="fab fa-windows"></i></kbd> and type <em>terminal</em>.
			</p>

			<h4>How to go to the CLI (Command-Line Interface) from GUI?</h4>
			<p>
				Press <kbd>Ctrl</kbd> + <kbd>Alt</kbd> + <kbd>F2</kbd>. Instead of <kbd>F2</kbd> can be <kbd>F3</kbd>, <kbd>F4</kbd>, <kbd>F5</kbd>, <kbd>F6</kbd> or <kbd>F1</kbd>.
			</p>

			<h4>How to back to the GUI (Graphical User Interface)?</h4>
			<p>
				Press <kbd>Alt</kbd> + <kbd>F1</kbd>. Instead of <kbd>F1</kbd> can be <kbd>F6</kbd>, <kbd>F7</kbd> or other function key. You can also quickly switch between instances of the command line with <kbd>Alt</kbd> + <kbd><i class="fas fa-arrow-right"></i></kbd> or <kbd>Alt</kbd> + <kbd><i class="fas fa-arrow-left"></i></kbd>.
			</p>
		<?php } else { ?>
			<h4>Co to jest GNU Linux?</h4>
			<p>
				<a target="_blank" href="https://www.gnu.org">GNU</a> <a target="_blank" href="https://www.kernel.org">Linux</a> jest systemem operacyjnym o otwartym kodzie źródłowym.
			</p>

			<h4>Co to jest BASH?</h4>
			<p>
				<a target="_blank" href="http://www.gnu.org/software/bash">BASH (Bourne Again SHell)</a> to najpopularniejsza powłoka dla terminala systemu GNU Linux.
			</p>

			<h4>Co to jest Debian?</h4>
			<p>
				<a target="_blank" href="https://www.debian.org">Debian</a> jest ważną dystrybucją GNU Linuksa. Wiele innych dystrybucji pochodzi z Debiana, np. <a target="_blank" href="https://ubuntu.com">Ubuntu</a> lub <a target = "_ blank" href="https://www.linuxmint.com">Linux Mint</a>.
			</p>

			<h4>Jak możemy używać systemu GNU Linux?</h4>
			<p>
				W większości dystrybucji (np. <a target="_blank" href="https://ubuntu.com/download/desktop">Ubuntu (Desktop)</a>, <a target="_blank" href="https://www.linuxmint.com">Linux Mint</a>), możemy używać go za pomocą interfejsu wiersza poleceń (CLI) oraz w trybie interfejsu graficznego (GUI).
			</p>
			<p>
				Istnieją dystrybucje, które nie mają domyślnie zainstalowanego GUI. Zazwyczaj są to wersje używane jako systemy operacyjne serwerów, np. <a target="_blank" href="https://ubuntu.com/download/server">Ubuntu Server</a>.
			</p>
			<p>
				Jeśli korzystamy z interfejsu graficznego, możemy uruchomić emulator terminala (pseudoterminal) lub przejść do interfejsu wiersza poleceń.
			</p>

			<h4>Jak uruchomić terminal w interfejsie graficznym (GUI)?</h4>
			<p>
				W większości dystrybucji kliknij przycisk menu lub naciśnij <kbd><i class = "fab fa-windows"></i></kbd> i wpisz <em>terminal</em>.
			</p>

			<h4>Jak przejść z interfejsu graficznego (GUI) do interfejsu wiersza poleceń (CLI)?</h4>
			<p>
				Wciśnij <kbd>Ctrl</kbd> + <kbd>Alt</kbd> + <kbd>F2</kbd>. Zamiast <kbd>F2</kbd> może być <kbd>F3</kbd>, <kbd>F4</kbd>, <kbd>F5</kbd>, <kbd>F6</kbd> lub <kbd>F1</kbd>.
			</p>

			<h4>Jak powrócić go interfejsu graficznego (GUI)?</h4>
			<p>
				Wciśnij <kbd>Alt</kbd> + <kbd>F1</kbd>. Zamiast <kbd>F1</kbd> może być <kbd>F6</kbd>, <kbd>F7</kbd> lub inny klawisz funkcyjny. Możemy również szybko przełączać się pomiędzy kolejnymi instancjami wiersza poleceń za pomocą <kbd>Alt</kbd> + <kbd><i class="fas fa-arrow-right"></i></kbd> lub <kbd>Alt</kbd> + <kbd><i class="fas fa-arrow-left"></i></kbd>.
			</p>
		<?php } ?>

	</article>

	<article id="keyboard-shortcuts">
		<hr>
		<h3><i class="far fa-keyboard"></i> <?=$keyboardShortcuts?></h3>
		<hr>
		<ul>
			<li><kbd>ctrl</kbd> + <kbd>l</kbd> - clear the terminal screen; same as the command <var>clear</var></li>
			<li><kbd>ctrl</kbd> + <kbd>c</kbd> - terminate the current task</li>
			<li><kbd>ctrl</kbd> + <kbd>z</kbd> - freeze the current task and move it to the background (see commands: <var>jobs</var>, <var>fg</var>, <var>bg</var> and operator <var>&</var></li>
			<li><kbd>ctrl</kbd> + <kbd>alt</kbd> + <kbd>del</kbd> - reboot the system (only in CLI)</li>
			<li><kbd>ctrl</kbd> + <kbd>alt</kbd> + <kbd>F1</kbd> - TTY1 (from GUI)</li>
			<li><kbd>ctrl</kbd> + <kbd>alt</kbd> + <kbd>F2</kbd> - TTY2 (from GUI)</li>
			<li><kbd>ctrl</kbd> + <kbd>alt</kbd> + <kbd>F3</kbd> - TTY3 (from GUI)</li>
			<li><kbd>ctrl</kbd> + <kbd>alt</kbd> + <kbd>F4</kbd> - TTY4 (from GUI)</li>
			<li><kbd>ctrl</kbd> + <kbd>alt</kbd> + <kbd>F5</kbd> - TTY5 (from GUI)</li>
			<li><kbd>ctrl</kbd> + <kbd>alt</kbd> + <kbd>F6</kbd> - TTY6 (from GUI)</li>
			<li><kbd>alt</kbd> + <kbd>F1</kbd> - TTY1 (from other TTY)</li>
			<li><kbd>alt</kbd> + <kbd>F2</kbd> - TTY2 (from other TTY)</li>
			<li><kbd>alt</kbd> + <kbd>F3</kbd> - TTY3 (from other TTY)</li>
			<li><kbd>alt</kbd> + <kbd>F4</kbd> - TTY4 (from other TTY)</li>
			<li><kbd>alt</kbd> + <kbd>F5</kbd> - TTY5 (from other TTY)</li>
			<li><kbd>alt</kbd> + <kbd>F6</kbd> - TTY6 (from other TTY)</li>
			<li><kbd>alt</kbd> + <kbd><i class="fas fa-arrow-right"></i></kbd> - next TTY (from other TTY)</li>
			<li><kbd>alt</kbd> + <kbd><i class="fas fa-arrow-left"></i></kbd> - previous TTY (from other TTY)</li>
		</ul>
	</article>

	<article id="disks-partitions">
		<hr>
		<h3><i class="far fa-hdd"></i> <?=$disksPartitions?></h3>
		<hr>
		<?php if ($lang == "en") { ?>
			<h4>Disks numbering</h4>
<pre>
sda
│ └─ disk number
└─── type of disk controller
</pre>
			<h5>types of disks controllers</h5>
			<ul>
				<li>h - IDE controller</li>
				<li>s - SATA / SCSI controller</li>
			</ul>
			<h5>disk number (as a letter)</h5>
			<ul>
				<li>a - 1st disk</li>
				<li>b - 2nd disk</li>
				<li>c - 3rd disk</li>
			</ul>
			<h5>examples</h5>
			<ul>
				<li>sda - disk #1 in SATA / SCSI controller</li>
				<li>sdb - disk #2 in SATA / SCSI controller</li>
				<li>hda - disk #1 in IDE controller</li>
			</ul>

			<h4>Partitions numbering</h4>
<pre>
sda1
│ │└─ partition number
│ └── disk number
└──── type of disk controller
</pre>
			<h5>partition number</h5>
			<ul>
				<li>1 - 1st partition</li>
				<li>2 - 2nd partition</li>
				<li>3 - 3rd partition</li>
			</ul>
			<h5>examples</h5>
			<ul>
				<li>sda1 - disk #1, partition #1</li>
				<li>sda2 - disk #1, partition #2</li>
				<li>sdb1 - disk #2, partition #1</li>
			</ul>
		<?php } else { ?>
			<h4>Numeracja dysków</h4>
<pre>
sda
│ └─ numer dysku
└─── rodzaj kontrolera dysku
</pre>
			<h5>rodzaje kontrolerów dysków</h5>
			<ul>
				<li>h - kontroler IDE</li>
				<li>s - kontroler SATA / SCSI</li>
			</ul>
			<h5>numer dysku (jako litera)</h5>
			<ul>
				<li>a - 1-szy dysk</li>
				<li>b - 2-gi dysk</li>
				<li>c - 3-ci dysk</li>
			</ul>
			<h5>przykłady</h5>
			<ul>
				<li>sda - dysk #1 w kontrolerze SATA / SCSI</li>
				<li>sdb - dysk #2 w kontrolerze SATA / SCSI</li>
				<li>hda - dysk #1 w kontrolerze IDE</li>
			</ul>

			<h4>Numeracja partycji</h4>
<pre>
sda1
│ │└─ numer partycji
│ └── numer dysku
└──── rodzaj kontrolera dysku
</pre>
			<h5>numer partycji</h5>
			<ul>
				<li>1 - 1-sza partycja</li>
				<li>2 - 2-ga partycja</li>
				<li>3 - 3-cia partycja</li>
			</ul>
			<h5>przykłady</h5>
			<ul>
				<li>sda1 - dysk #1, partycja #1</li>
				<li>sda2 - dysk #1, partycja #2</li>
				<li>sdb1 - dysk #2, partycja #1</li>
			</ul>
		<?php } ?>

<samp class="linux">
<div class="caption">GNU Linux (BASH) - Linux Mint [Debian-based distro]</div>
<pre><font color="#8AE234"><b>karol@core2duo</b></font>:<font color="#729FCF"><b>~</b></font>$ sudo fdisk -l
[sudo] password for karol:          
<b>Disk /dev/sda: 223,58 GiB, 240056327680 bytes, 468860015 sectors</b>
Disk model: SanDisk SSD PLUS
Units: sectors of 1 * 512 = 512 bytes
Sector size (logical/physical): 512 bytes / 512 bytes
I/O size (minimum/optimal): 512 bytes / 512 bytes
Disklabel type: dos
Disk identifier: 0x9438d1e9

<b>Device</b>     <b>Boot</b> <b>    Start</b> <b>      End</b> <b>  Sectors</b> <b>  Size</b> <b>Id</b> <b>Type</b>
/dev/sda1  *         2048 296962047 296960000 141,6G  7 HPFS/NTFS/exFAT
/dev/sda2       296962048 358401501  61439454  29,3G 83 Linux
/dev/sda3       358402048 464662527 106260480  50,7G 83 Linux
/dev/sda4       464662528 468858879   4196352     2G 82 Linux swap / Solaris


<b>Disk /dev/sdb: 55,92 GiB, 60022480896 bytes, 117231408 sectors</b>
Disk model: KINGSTON SVP200S
Units: sectors of 1 * 512 = 512 bytes
Sector size (logical/physical): 512 bytes / 512 bytes
I/O size (minimum/optimal): 512 bytes / 512 bytes
Disklabel type: dos
Disk identifier: 0x781a275d

<b>Device</b>     <b>Boot</b> <b>   Start</b> <b>      End</b> <b> Sectors</b> <b> Size</b> <b>Id</b> <b>Type</b>
/dev/sdb1  *        2048  96751615 96749568 46,1G  7 HPFS/NTFS/exFAT
/dev/sdb2       96751616 117229567 20477952  9,8G  b W95 FAT32
</pre>
</samp>

	</article>

	<article id="directory-structure">
		<hr>
		<h3><i class="fas fa-sitemap"></i> <?=$directoryStructure?></h3>
		<hr>

<pre>
├── bin
├── boot
├── cdrom
├── dev
├── etc
├── home
├── lib
├── lib64
├── lost+found
├── media
├── mnt
├── opt
├── proc
├── root
├── run
├── sbin
├── srv
├── sys
├── tmp
├── usr
└── var
</pre>

<samp class="linux">
<div class="caption">GNU Linux (BASH) - Linux Mint [Debian-based distro]</div>
<pre><font color="#8AE234"><b>karol@core2duo</b></font>:<font color="#729FCF"><b>/</b></font>$ tree -L 1
<font color="#729FCF"><b>.</b></font>
├── <font color="#729FCF"><b>bin</b></font>
├── <font color="#729FCF"><b>boot</b></font>
├── <font color="#729FCF"><b>cdrom</b></font>
├── <font color="#729FCF"><b>dev</b></font>
├── <font color="#729FCF"><b>etc</b></font>
├── <font color="#729FCF"><b>home</b></font>
├── <font color="#729FCF"><b>lib</b></font>
├── <font color="#729FCF"><b>lib32</b></font>
├── <font color="#729FCF"><b>lib64</b></font>
├── <font color="#729FCF"><b>lost+found</b></font>
├── <font color="#729FCF"><b>media</b></font>
├── <font color="#729FCF"><b>mnt</b></font>
├── <font color="#729FCF"><b>opt</b></font>
├── <font color="#729FCF"><b>proc</b></font>
├── <font color="#729FCF"><b>root</b></font>
├── <font color="#729FCF"><b>run</b></font>
├── <font color="#729FCF"><b>sbin</b></font>
├── <font color="#729FCF"><b>srv</b></font>
├── <font color="#729FCF"><b>sys</b></font>
├── <span style="background-color:#4E9A06"><font color="#2E3436">tmp</font></span>
├── <font color="#729FCF"><b>usr</b></font>
└── <font color="#729FCF"><b>var</b></font>
</pre>
</samp>

	</article>

	<article id="system-files">
		<hr>
		<h3><i class="fas fa-file-invoice"></i> <?=$systemFiles?></h3>
		<hr>
		<h4>/dev/</h4>
		<h4>/etc/</h4>
	</article>

	<article id="environment-variables">
		<hr>
		<h3><i class="fa fa-file-invoice"></i> <?=$environmentVariables?></h3>
		<hr>
		<ul>
			<li>set</li>
			<li>env</li>
			<li>export</li>
		</ul>

<samp class="linux">
<div class="caption">GNU Linux (BASH) - Linux Mint [Debian-based distro]</div>
<pre><font color="#8AE234"><b>karol@core2duo</b></font>:<font color="#729FCF"><b>~</b></font>$ set | head -96
BASH=/usr/bin/bash
BASHOPTS=checkwinsize:cmdhist:complete_fullquote:expand_aliases:extglob:extquote:force_fignore:globasciiranges:histappend:interactive_comments:progcomp:promptvars:sourcepath
BASH_ALIASES=()
BASH_ARGC=([0]=&quot;0&quot;)
BASH_ARGV=()
BASH_CMDS=()
BASH_COMPLETION_VERSINFO=([0]=&quot;2&quot; [1]=&quot;10&quot;)
BASH_LINENO=()
BASH_REMATCH=()
BASH_SOURCE=()
BASH_VERSINFO=([0]=&quot;5&quot; [1]=&quot;0&quot; [2]=&quot;17&quot; [3]=&quot;1&quot; [4]=&quot;release&quot; [5]=&quot;x86_64-pc-linux-gnu&quot;)
BASH_VERSION=&apos;5.0.17(1)-release&apos;
COLORTERM=truecolor
COLUMNS=80
COMP_WORDBREAKS=$&apos; \t\n&quot;\&apos;&gt;&lt;=;|&amp;(:&apos;
DBUS_SESSION_BUS_ADDRESS=unix:path=/run/user/1000/bus
DESKTOP_SESSION=cinnamon
DIRSTACK=()
DISPLAY=:0
EUID=1000
GDMSESSION=cinnamon
GDM_LANG=en_US
GNOME_DESKTOP_SESSION_ID=this-is-deprecated
GNOME_TERMINAL_SCREEN=/org/gnome/Terminal/screen/b124d479_898d_49c3_945a_f597a820f69a
GNOME_TERMINAL_SERVICE=:1.1716
GPG_AGENT_INFO=/run/user/1000/gnupg/S.gpg-agent:0:1
GROUPS=()
GTK3_MODULES=xapp-gtk3-module
GTK_MODULES=gail:atk-bridge
GTK_OVERLAY_SCROLLING=1
HISTCONTROL=ignoreboth
HISTFILE=/home/karol/.bash_history
HISTFILESIZE=2000
HISTSIZE=1000
HOME=/home/karol
HOSTNAME=core2duo
HOSTTYPE=x86_64
IFS=$&apos; \t\n&apos;
INSIDE_NEMO_PYTHON=
LANG=en_US.UTF-8
LANGUAGE=en_US
LC_ADDRESS=pl_PL.UTF-8
LC_IDENTIFICATION=pl_PL.UTF-8
LC_MEASUREMENT=pl_PL.UTF-8
LC_MONETARY=pl_PL.UTF-8
LC_NAME=pl_PL.UTF-8
LC_NUMERIC=pl_PL.UTF-8
LC_PAPER=pl_PL.UTF-8
LC_TELEPHONE=pl_PL.UTF-8
LC_TIME=pl_PL.UTF-8
LESSCLOSE=&apos;/usr/bin/lesspipe %s %s&apos;
LESSOPEN=&apos;| /usr/bin/lesspipe %s&apos;
LINES=24
LOGNAME=karol
LS_COLORS=&apos;rs=0:di=01;34:ln=01;36:mh=00:pi=40;33:so=01;35:do=01;35:bd=40;33;01:cd=40;33;01:or=40;31;01:mi=00:su=37;41:sg=30;43:ca=30;41:tw=30;42:ow=34;42:st=37;44:ex=01;32:*.tar=01;31:*.tgz=01;31:*.arc=01;31:*.arj=01;31:*.taz=01;31:*.lha=01;31:*.lz4=01;31:*.lzh=01;31:*.lzma=01;31:*.tlz=01;31:*.txz=01;31:*.tzo=01;31:*.t7z=01;31:*.zip=01;31:*.z=01;31:*.dz=01;31:*.gz=01;31:*.lrz=01;31:*.lz=01;31:*.lzo=01;31:*.xz=01;31:*.zst=01;31:*.tzst=01;31:*.bz2=01;31:*.bz=01;31:*.tbz=01;31:*.tbz2=01;31:*.tz=01;31:*.deb=01;31:*.rpm=01;31:*.jar=01;31:*.war=01;31:*.ear=01;31:*.sar=01;31:*.rar=01;31:*.alz=01;31:*.ace=01;31:*.zoo=01;31:*.cpio=01;31:*.7z=01;31:*.rz=01;31:*.cab=01;31:*.wim=01;31:*.swm=01;31:*.dwm=01;31:*.esd=01;31:*.jpg=01;35:*.jpeg=01;35:*.mjpg=01;35:*.mjpeg=01;35:*.gif=01;35:*.bmp=01;35:*.pbm=01;35:*.pgm=01;35:*.ppm=01;35:*.tga=01;35:*.xbm=01;35:*.xpm=01;35:*.tif=01;35:*.tiff=01;35:*.png=01;35:*.svg=01;35:*.svgz=01;35:*.mng=01;35:*.pcx=01;35:*.mov=01;35:*.mpg=01;35:*.mpeg=01;35:*.m2v=01;35:*.mkv=01;35:*.webm=01;35:*.ogm=01;35:*.mp4=01;35:*.m4v=01;35:*.mp4v=01;35:*.vob=01;35:*.qt=01;35:*.nuv=01;35:*.wmv=01;35:*.asf=01;35:*.rm=01;35:*.rmvb=01;35:*.flc=01;35:*.avi=01;35:*.fli=01;35:*.flv=01;35:*.gl=01;35:*.dl=01;35:*.xcf=01;35:*.xwd=01;35:*.yuv=01;35:*.cgm=01;35:*.emf=01;35:*.ogv=01;35:*.ogx=01;35:*.aac=00;36:*.au=00;36:*.flac=00;36:*.m4a=00;36:*.mid=00;36:*.midi=00;36:*.mka=00;36:*.mp3=00;36:*.mpc=00;36:*.ogg=00;36:*.ra=00;36:*.wav=00;36:*.oga=00;36:*.opus=00;36:*.spx=00;36:*.xspf=00;36:&apos;
MACHTYPE=x86_64-pc-linux-gnu
MAILCHECK=60
OLDPWD=/home/karol
OPTERR=1
OPTIND=1
OSTYPE=linux-gnu
PAPERSIZE=a4
PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/games:/snap/bin
PIPESTATUS=([0]=&quot;0&quot;)
PPID=10883
PS1=&apos;\[\e]0;\u@\h: \w\a\]${debian_chroot:+($debian_chroot)}\[\033[01;32m\]\u@\h\[\033[00m\]:\[\033[01;34m\]\w\[\033[00m\]\$ &apos;
PS2=&apos;&gt; &apos;
PS4=&apos;+ &apos;
PWD=/home/karol
QT_ACCESSIBILITY=1
QT_QPA_PLATFORMTHEME=qt5ct
SESSION_MANAGER=local/core2duo:@/tmp/.ICE-unix/1161,unix/core2duo:/tmp/.ICE-unix/1161
SHELL=/bin/bash
SHELLOPTS=braceexpand:emacs:hashall:histexpand:history:interactive-comments:monitor
SHLVL=1
SSH_AGENT_PID=1310
SSH_AUTH_SOCK=/tmp/ssh-5epUrs6SzHHy/agent.1161
TERM=xterm-256color
UID=1000
USER=karol
VTE_VERSION=6003
XAUTHORITY=/home/karol/.Xauthority
XDG_CONFIG_DIRS=/etc/xdg/xdg-cinnamon:/etc/xdg
XDG_CURRENT_DESKTOP=X-Cinnamon
XDG_DATA_DIRS=/usr/share/cinnamon:/usr/share/gnome:/home/karol/.local/share/flatpak/exports/share:/var/lib/flatpak/exports/share:/usr/local/share:/usr/share:/var/lib/snapd/desktop
XDG_GREETER_DATA_DIR=/var/lib/lightdm-data/karol
XDG_RUNTIME_DIR=/run/user/1000
XDG_SEAT=seat0
XDG_SEAT_PATH=/org/freedesktop/DisplayManager/Seat0
XDG_SESSION_CLASS=user
XDG_SESSION_DESKTOP=cinnamon
XDG_SESSION_ID=c1
XDG_SESSION_PATH=/org/freedesktop/DisplayManager/Session0
XDG_SESSION_TYPE=x11
XDG_VTNR=7
_=--color=auto
</pre>
</samp>

<samp class="linux">
<div class="caption">GNU Linux (BASH) - Linux Mint [Debian-based distro]</div>
<pre><font color="#8AE234"><b>karol@core2duo</b></font>:<font color="#729FCF"><b>~</b></font>$ env
SHELL=/bin/bash
SESSION_MANAGER=local/core2duo:@/tmp/.ICE-unix/1161,unix/core2duo:/tmp/.ICE-unix/1161
QT_ACCESSIBILITY=1
COLORTERM=truecolor
XDG_CONFIG_DIRS=/etc/xdg/xdg-cinnamon:/etc/xdg
XDG_SESSION_PATH=/org/freedesktop/DisplayManager/Session0
GNOME_DESKTOP_SESSION_ID=this-is-deprecated
LANGUAGE=en_US
LC_ADDRESS=pl_PL.UTF-8
LC_NAME=pl_PL.UTF-8
SSH_AUTH_SOCK=/tmp/ssh-5epUrs6SzHHy/agent.1161
DESKTOP_SESSION=cinnamon
LC_MONETARY=pl_PL.UTF-8
SSH_AGENT_PID=1310
GTK_MODULES=gail:atk-bridge
XDG_SEAT=seat0
PWD=/home/karol
LOGNAME=karol
XDG_SESSION_DESKTOP=cinnamon
QT_QPA_PLATFORMTHEME=qt5ct
XDG_SESSION_TYPE=x11
GPG_AGENT_INFO=/run/user/1000/gnupg/S.gpg-agent:0:1
XAUTHORITY=/home/karol/.Xauthority
XDG_GREETER_DATA_DIR=/var/lib/lightdm-data/karol
GDM_LANG=en_US
INSIDE_NEMO_PYTHON=
HOME=/home/karol
LC_PAPER=pl_PL.UTF-8
LANG=en_US.UTF-8
LS_COLORS=rs=0:di=01;34:ln=01;36:mh=00:pi=40;33:so=01;35:do=01;35:bd=40;33;01:cd=40;33;01:or=40;31;01:mi=00:su=37;41:sg=30;43:ca=30;41:tw=30;42:ow=34;42:st=37;44:ex=01;32:*.tar=01;31:*.tgz=01;31:*.arc=01;31:*.arj=01;31:*.taz=01;31:*.lha=01;31:*.lz4=01;31:*.lzh=01;31:*.lzma=01;31:*.tlz=01;31:*.txz=01;31:*.tzo=01;31:*.t7z=01;31:*.zip=01;31:*.z=01;31:*.dz=01;31:*.gz=01;31:*.lrz=01;31:*.lz=01;31:*.lzo=01;31:*.xz=01;31:*.zst=01;31:*.tzst=01;31:*.bz2=01;31:*.bz=01;31:*.tbz=01;31:*.tbz2=01;31:*.tz=01;31:*.deb=01;31:*.rpm=01;31:*.jar=01;31:*.war=01;31:*.ear=01;31:*.sar=01;31:*.rar=01;31:*.alz=01;31:*.ace=01;31:*.zoo=01;31:*.cpio=01;31:*.7z=01;31:*.rz=01;31:*.cab=01;31:*.wim=01;31:*.swm=01;31:*.dwm=01;31:*.esd=01;31:*.jpg=01;35:*.jpeg=01;35:*.mjpg=01;35:*.mjpeg=01;35:*.gif=01;35:*.bmp=01;35:*.pbm=01;35:*.pgm=01;35:*.ppm=01;35:*.tga=01;35:*.xbm=01;35:*.xpm=01;35:*.tif=01;35:*.tiff=01;35:*.png=01;35:*.svg=01;35:*.svgz=01;35:*.mng=01;35:*.pcx=01;35:*.mov=01;35:*.mpg=01;35:*.mpeg=01;35:*.m2v=01;35:*.mkv=01;35:*.webm=01;35:*.ogm=01;35:*.mp4=01;35:*.m4v=01;35:*.mp4v=01;35:*.vob=01;35:*.qt=01;35:*.nuv=01;35:*.wmv=01;35:*.asf=01;35:*.rm=01;35:*.rmvb=01;35:*.flc=01;35:*.avi=01;35:*.fli=01;35:*.flv=01;35:*.gl=01;35:*.dl=01;35:*.xcf=01;35:*.xwd=01;35:*.yuv=01;35:*.cgm=01;35:*.emf=01;35:*.ogv=01;35:*.ogx=01;35:*.aac=00;36:*.au=00;36:*.flac=00;36:*.m4a=00;36:*.mid=00;36:*.midi=00;36:*.mka=00;36:*.mp3=00;36:*.mpc=00;36:*.ogg=00;36:*.ra=00;36:*.wav=00;36:*.oga=00;36:*.opus=00;36:*.spx=00;36:*.xspf=00;36:
XDG_CURRENT_DESKTOP=X-Cinnamon
VTE_VERSION=6003
XDG_SEAT_PATH=/org/freedesktop/DisplayManager/Seat0
GNOME_TERMINAL_SCREEN=/org/gnome/Terminal/screen/e5a4ca93_cb6c_4a7b_97b7_e8c8534460a0
LESSCLOSE=/usr/bin/lesspipe %s %s
XDG_SESSION_CLASS=user
TERM=xterm-256color
LC_IDENTIFICATION=pl_PL.UTF-8
GTK_OVERLAY_SCROLLING=1
LESSOPEN=| /usr/bin/lesspipe %s
USER=karol
GNOME_TERMINAL_SERVICE=:1.2033
DISPLAY=:0
SHLVL=1
LC_TELEPHONE=pl_PL.UTF-8
LC_MEASUREMENT=pl_PL.UTF-8
XDG_VTNR=7
XDG_SESSION_ID=c1
PAPERSIZE=a4
XDG_RUNTIME_DIR=/run/user/1000
LC_TIME=pl_PL.UTF-8
GTK3_MODULES=xapp-gtk3-module
XDG_DATA_DIRS=/usr/share/cinnamon:/usr/share/gnome:/home/karol/.local/share/flatpak/exports/share:/var/lib/flatpak/exports/share:/usr/local/share:/usr/share:/var/lib/snapd/desktop
PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/games:/snap/bin
GDMSESSION=cinnamon
DBUS_SESSION_BUS_ADDRESS=unix:path=/run/user/1000/bus
LC_NUMERIC=pl_PL.UTF-8
_=/usr/bin/env
OLDPWD=/home/karol/Documents/cmd
</pre>
</samp>

	</article>

	<article id="access-rights">
		<hr>
		<h3><i class="fas fa-unlock-alt"></i> <?=$accessRights?></h3>
		<hr>
<samp class="linux">
<div class="caption">GNU Linux (BASH) - Linux Mint [Debian-based distro]</div>
<pre>
<font color="#8AE234"><b>karol@core2duo</b></font>:<font color="#729FCF"><b>~</b></font>$ ls -l
razem 44
drwxr-xr-x 15 karol karol 4096 sie  3 20:57 <font color="#729FCF"><b>Aplikacje</b></font>
drwxr-xr-x  4 karol karol 4096 sie  4 10:47 <font color="#729FCF"><b>Dokumenty</b></font>
drwxr-xr-x 22 karol karol 4096 sie  2 13:20 <font color="#729FCF"><b>ePSXe</b></font>
drwxr-xr-x  7 karol karol 4096 sie  3 20:54 <font color="#729FCF"><b>Muzyka</b></font>
drwxr-xr-x  2 karol karol 4096 sie  2 16:14 <font color="#729FCF"><b>Obrazy</b></font>
drwxr-xr-x  2 karol karol 4096 sie  4 10:38 <font color="#729FCF"><b>Pobrane</b></font>
drwxrwxr-x  2 karol karol 4096 sie  4 18:32 <font color="#729FCF"><b>Projects</b></font>
drwxr-xr-x  2 karol karol 4096 sie  2 16:14 <font color="#729FCF"><b>Publiczny</b></font>
drwxr-xr-x  4 karol karol 4096 sie  4 13:06 <font color="#729FCF"><b>Pulpit</b></font>
drwxr-xr-x  2 karol karol 4096 sie  2 16:14 <font color="#729FCF"><b>Szablony</b></font>
drwxr-xr-x  2 karol karol 4096 sie  2 16:14 <font color="#729FCF"><b>Wideo</b></font>
</pre>
</samp>
		<?php if ($lang == "en") { ?>
		
<pre>
 ┌───────┬─ <u>a</u>ll
drwxr-xr-x
│└┬┘└┬┘└┬┘
│ │  │  └─ <u>o</u>ther
│ │  └─ <u>g</u>roup
│ └─ <u>u</u>ser
└─ type of file / directory
</pre>
		<h4>types of files</h4>
		<ul>
			<li>d - <u>d</u>irectory</li>
			<li>- - usual file</li>
			<li>l - <u>l</u>ink</li>
		</ul>
		<h4>who is who?</h4>
		<ul>
			<li><u>u</u>ser - the file (directory) owner</li>
			<li><u>g</u>roup - users who are in the same group as the owner of the file</li>
			<li><u>o</u>ther - other users</li>
			<li><u>a</u>ll - all users</li>
		</ul>
		<h4>what means ...?</h4>
		<ul>
			<li>r - reading right</li>
			<li>w - writing right</li>
			<li>x - executing right</li>
		</ul>
		<h4>numerical value of access rights</h4>
		<ul>
			<li>r - 4</li>
			<li>w - 2</li>
			<li>x - 1</li>
		</ul>
		<ul>
			<li>rwx = 7</li>
			<li>rw- = 6</li>
			<li>r-x = 5</li>
			<li>r-- = 4</li>
			<li>--- = 0</li>
		</ul>

		<h4>how to change access rights?</h4>
		<h5>by numerical values</h5>
		<ul>
			<li><code class="linux">chmod 777 fileName</code> - rwxrwxrwx - set all rights to all users</li>
			<li><code class="linux">chmod 700 fileName</code> - rwx------ - only the owner has rights (all)</li>
			<li><code class="linux">chmod 644 fileName</code> - rw-r--r-- - the owner can read and write; users from group and other users can only read</li>
			<li><code class="linux">chmod 755 fileName</code> - rwxr-xr-x - the owner has all rights; users from group and other users can read and execute</li>
		</ul>
		<h5>by assigning</h5>
		<ul>
			<li><code class="linux">chmod u+x fileName</code> - add executing right for the file owner <u>u</u>ser</li>
			<li><code class="linux">chmod o-r fileName</code> - remove reading right for <u>o</u>ther users</li>
			<li><code class="linux">chmod g=rx fileName</code> - set reading and executing right for <u>g</u>roup users</li>
			<li><code class="linux">chmod a=rw fileName</code> - set reading and writing right for <u>a</u>ll users</li>
		</ul>



		<?php } else { ?>
			


<pre>
 ┌───────┬─ wszyscy - <u>a</u>ll
drwxr-xr-x
│└┬┘└┬┘└┬┘
│ │  │  └─ inni (<u>o</u>ther)
│ │  └─ grupa (<u>g</u>roup)
│ └─ użytkownik (<u>u</u>ser)
└─ rodzaj pliku / katalog
</pre>
		<h4>rodzaje plików</h4>
		<ul>
			<li>d - katalog (<u>d</u>irectory)</li>
			<li>- - zwykły plik</li>
			<li>l - dowiązanie / skrót (<u>l</u>ink) do pliku</li>
		</ul>
		<h4>kto jest kim?</h4>
		<ul>
			<li><u>u</u>ser (użytkownik) - właściciel pliku (katalogu)</li>
			<li><u>g</u>roup (grupa) - użytkownicy, którzy są w tej samej grupie, co właściciel pliku</li>
			<li><u>o</u>ther (pozostali) - pozostali użytkownicy</li>
			<li><u>a</u>ll (wszyscy) wszyscy użytkownicy</li>
		</ul>
		<h4>co oznacza ...?</h4>
		<ul>
			<li>r - prawo odczytu</li>
			<li>w - prawo zapisu</li>
			<li>x - prawo wykonywania</li>
		</ul>
		<h4>wartości numeryczne praw dostępu</h4>
		<ul>
			<li>r - 4</li>
			<li>w - 2</li>
			<li>x - 1</li>
		</ul>
		<ul>
			<li>rwx = 7</li>
			<li>rw- = 6</li>
			<li>r-x = 5</li>
			<li>r-- = 4</li>
			<li>--- = 0</li>
		</ul>

		<h4>jak zmienić prawa dostępu?</h4>
		<h5>poprzez wartości numeryczne</h5>
		<ul>
			<li><code class="linux">chmod 777 fileName</code> - rwxrwxrwx - set all rights to all users</li>
			<li><code class="linux">chmod 700 fileName</code> - rwx------ - only the owner has rights (all)</li>
			<li><code class="linux">chmod 644 fileName</code> - rw-r--r-- - the owner can read and write; users from group and other users can only read</li>
			<li><code class="linux">chmod 755 fileName</code> - rwxr-xr-x - the owner has all rights; users from group and other users can read and execute</li>
		</ul>
		<h5>poprzez przypisanie</h5>
		<ul>
			<li><code class="linux">chmod u+x fileName</code> - add executing right for the file owner <u>u</u>ser</li>
			<li><code class="linux">chmod o-r fileName</code> - remove reading right for <u>o</u>ther users</li>
			<li><code class="linux">chmod g=rx fileName</code> - set reading and executing right for <u>g</u>roup users</li>
			<li><code class="linux">chmod a=rw fileName</code> - set reading and writing right for <u>a</u>ll users</li>
		</ul>



		<?php } ?>
	</article>

	<article id="pipelines-redirections">
		<hr>
		<h3><i class="fas fa-directions"></i> <?=$pipelinesRedirections?></h3>
		<hr>
	</article>

	<article id="command-information">
		<hr>
		<h3><i class="fa fa-question"></i> <?=$commandInformation?></h3>
		<hr>
		<ul>
			<li>whatis</li>
			<li>apropos</li>
			<li>man</li>
			<li>info</li>
			<li>tldr</li>
		</ul>

		<!-- <table>
			<tr>
				<th></th>
				<th>Unix</th>
				<th>GNU Core Utilities<br><em><small>coreutils 8.27</small></em></th>
				<th>Linux Mint 20<br><em><small>installed</small></em></th>
				<th>Linux Mint 20<br><em><small>to download</small></em></th>
			</tr>
			<tr>
				<td>man</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
			<tr>
				<td>man</td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
				<td><i class="fa fa-check fa-fw"></i></td>
			</tr>
		</table> -->
	</article>

	<article id="browsing-directories">
		<hr>
		<h3><i class="far fa-folder-open"></i> <?=$browsingDirectories?></h3>
		<hr>
		<ul>
			<li>pwd</li>
			<li>ls</li>
			<li>cd</li>
			<li>tree</li>
		</ul>

		<code class="linux">cd PATH</code> Go to the given directory<br>
		<code class="linux">cd</code> - Go to home directory of current user<br>
		<code class="linux">cd ..</code> - Go up to the parent of the current directory<br>
		<code class="linux">cd -</code> - Go to the previously chosen directory<br>
		<code class="linux">tree -L 1</code> - display one-level struct<br>
		<code class="linux">tree -d</code> - display only directories

<samp class="linux">
<div class="caption">GNU Linux (BASH) - Linux Mint [Debian-based distro]</div>
<pre><font color="#8AE234"><b>karol@core2duo</b></font>:<font color="#729FCF"><b>~/Dokumenty/DOStutorial</b></font>$ tree -L 2
<font color="#729FCF"><b>.</b></font>
├── <font color="#729FCF"><b>dos</b></font>
│   ├── <font color="#729FCF"><b>batch</b></font>
│   ├── batch.htm
│   ├── dysk.htm
│   ├── menu.htm
│   ├── msdos.htm
│   ├── start.htm
│   ├── strukt.htm
│   └── wstep.htm
├── <font color="#729FCF"><b>gui</b></font>
│   ├── <font color="#AD7FA8"><b>dos.gif</b></font>
│   ├── <font color="#AD7FA8"><b>flarup.gif</b></font>
│   ├── link.css
│   ├── <font color="#AD7FA8"><b>logo.gif</b></font>
│   ├── logo.htm
│   ├── napis.htm
│   ├── okno.htm
│   └── start.htm
└── index.htm

3 directories, 16 files
<font color="#8AE234"><b>karol@core2duo</b></font>:<font color="#729FCF"><b>~/Dokumenty/DOStutorial</b></font>$ 
</pre>
</samp>

	</article>

	<article id="file-manipulation">
		<hr>
		<h3><i class="far fa-copy"></i> <?=$fileManipulation?></h3>
		<hr>
		<ul>
			<li>cp</li>
			<li>mv</li>
			<li>rm</li>
			<li>ln</li>
			<li>touch</li>
			<li>mkdir</li>
			<li>rmdir</li>
			<li>install</li>
		</ul>
	</article>

	<article id="file-information">
		<hr>
		<h3><i class="far fa-file-alt"></i> <?=$fileInformation?></h3>
		<hr>
		<ul>
			<li>stat</li>
			<li>file</li>
			<li>cmp</li>
			<li>diff</li>
		</ul>
	</article>

	<article id="reading-files">
		<hr>
		<h3><i class="far fa-file-alt"></i> <?=$readingFiles?></h3>
		<hr>
		<ul>
			<li>more</li>
			<li>less</li>
			<li>head</li>
			<li>tail</li>
		</ul>
	</article>

	<article id="console">
		<hr>
		<h3><i class="fa fa-terminal"></i> <?=$console?></h3>
		<hr>
		<ul>
			<li>tty</li>
			<li>clear</li>
			<li>reset</li>
			<li>history</li>
			<li>alias</li>
		</ul>
	</article>

	<article id="power-session">
		<hr>
		<h3><i class="fa fa-power-off"></i> <?=$powerSession?></h3>
		<hr>
		<ul>
			<li>exit</li>
			<li>logout</li>
			<li>login</li>
			<li>reboot</li>
			<li>poweroff</li>
			<li>shutdown</li>
		</ul>
	</article>

	<article id="file-system">
		<hr>
		<h3><i class="far fa-hdd fa-fw"></i> <?=$fileSystem?></h3>
		<hr>
		<ul>
			<li>df</li>
			<li>du</li>
			<li>fstab</li>
			<li>mount</li>
			<li>umount</li>
			<li>fdisk</li>
			<li>mkfs</li>
			<li>fsck</li>
		</ul>
	</article>

	<article id="administration">
		<hr>
		<h3><i class="fa fa-shield-alt"></i> <?=$administration?></h3>
		<hr>
		<ul>
			<li>su</li>
			<li>sudo</li>
			<li>chmod</li>
			<li>chown</li>
			<li>umask</li>
			<li>update-grub</li>
		</ul>
	</article>

	<article id="users">
		<hr>
		<h3><i class="far fa-user"></i> <?=$users?></h3>
		<hr>
		<ul>
			<li>logname</li>
			<li>whoami</li>
			<li>who</li>
			<li>w</li>
			<li>last</li>
			<li>lslogins</li>
			<li>groups</li>
		</ul>
	</article>

	<article id="user-administration">
	<hr>
	<h3><i class="fa fa-user-shield"></i> <?=$userAdministration?></h3>
	<hr>
	<ul>
		<li>passwd</li>
		<li>adduser</li>
		<li>deluser</li>
		<li>useradd</li>
		<li>userdel</li>
		<li>addgroup</li>
		<li>delgroup</li>
		<li>groupadd</li>
		<li>groupdel</li>
	</ul>
	</article>

	<article id="statistics">
		<hr>
		<h3><i class="fa fa-chart-bar"></i> <?=$statistics?></h3>
		<hr>
		<ul>
			<li>uptime</li>
			<li>free</li>
			<li>time</li>
			<li>date</li>
			<li>cal</li>
		</ul>
	</article>

	<article id="system">
	<hr>
	<h3><i class="fa fa-laptop"></i> system</h3>
	<hr>
	<ul>
		<li>hostname</li>
		<li>uptime</li>
		<li>uname</li>
		<li>lsmod</li>
		<li>modprobe</li>
	</ul>
	</article>

	<article id="hardware">
	<hr>
	<h3><i class="fa fa-microchip"></i> <?=$hardware?></h3>
	<hr>
	<ul>
		<li>arch</li>
		<li>lscpu</li>
		<li>lsmem</li>
		<li>lsusb</li>
		<li>lspci</li>
		<li>lshw</li>
		<li>hdparm</li>
	</ul>
	</article>

	<article id="network">
	<hr>
	<h3><i class="fa fa-network-wired"></i> <?=$network?></h3>
	<hr>
	<ul>
		<li>ifconfig</li>
		<li>ping</li>
		<li>traceroute</li>
		<li>host</li>
		<li>whois</li>
		<li>arp</li>
		<li>route</li>
		<li>netstat</li>
		<li>dig</li>
		<li>wget</li>
		<li>curl</li>
		<li>iptables</li>
		<li>ufw</li>
	</ul>
	</article>

	<article id="wireless">
	<hr>
	<h3><i class="fa fa-wifi"></i> <?=$wireless?></h3>
	<hr>
	<ul>
		<li>iwconfig</li>
		<li>iwlist</li>
		<li>rfkill</li>
	</ul>
	</article>

	<article id="network-sniffing">
	<hr>
	<h3><i class="fa fa-user-secret"></i> <?=$networkSniffing?></h3>
	<hr>
	<ul>
		<li>tcpdump</li>
		<li>nmap</li>
		<li>kismet</li>
		<li>wireshark</li>
	</ul>
	</article>

	<article id="processes">
	<hr>
	<h3><i class="fa fa-list-ul"></i> <?=$processes?></h3>
	<hr>
	<ul>
		<li>ps</li>
		<li>top</li>
		<li>htop</li>
		<li>kill</li>
		<li>killall</li>
		<li>kill -KILL</li>
		<li>killall -KILL</li>
		<li>pidof</li>
		<li>pstree</li>
		<li>jobs</li>
		<li>fg</li>
		<li>bg</li>
		<li>nice</li>
		<li>renice</li>
	</ul>
	</article>

	<article id="package-managers">
	<hr>
	<h3><i class="fa fa-cube"></i> <?=$packageManagers?></h3>
	<hr>
	<ul>
		<li>apt</li>
		<ul>
			<li>apt search</li>
			<li>apt show</li>
			<li>apt install</li>
			<li>apt remove</li>
			<li>apt purge</li>
			<li>apt update</li>
			<li>apt list --upgradable</li>
			<li>apt upgrade</li>
			<li>apt autoremove</li>
			<li>apt add-repository</li>
		</ul>
		<li>apt-cache</li>
		<ul>
			<li>apt-cache search</li>
			<li>apt-cache show</li>
		</ul>
		<li>apt-get</li>
		<ul>
			<li>apt-get install</li>
			<li>apt-get remove</li>
			<li>apt-get purge</li>
			<li>apt-get update</li>
			<li>apt-get upgrade</li>
			<li>apt-get autoremove</li>
		</ul>
		<li>apt-key</li>
		<li>add-apt-repository</li>
		<li>aptitude</li>
		<li>rpm</li>
		<li>yum</li>
		<li>pacman</li>
		<li>flatpak</li>
		<ul>
			<li>flatpak list</li>
			<li>flatpak install</li>
			<li>flatpak uninstall</li>
		</ul>
		<li>snap</li>
	</ul>
	</article>

	<article id="search">
	<hr>
	<h3><i class="fa fa-search"></i> <?=$search?></h3>
	<hr>
	<ul>
		<li>which</li>
		<li>whereis</li>
		<li>locate</li>
		<li>find</li>
		<li>grep</li>
	</ul>
	</article>

	<article id="text-manipulation">
	<hr>
	<h3><i class="fa fa-edit"></i> <?=$textManipulation?></h3>
	<hr>
	<ul>
		<li>cat</li>
		<li>tee</li>
		<li>awk</li>
		<li>sed</li>
	</ul>
	</article>

	<article id="archive">
	<hr>
	<h3><i class="far fa-file-archive"></i> <?=$archive?></h3>
	<hr>
	<ul>
		<li>tar</li>
		<li>zip</li>
		<li>unzip</li>
		<li>gzip</li>
		<li>bzip2</li>
	</ul>
	</article>

	<article id="compilation">
	<hr>
	<h3><i class="far fa-file-code"></i> <?=$compilation?></h3>
	<hr>
	<ul>
		<li>gcc</li>
		<li>g&plus;&plus;</li>
		<li>javac</li>
		<li>java</li>
		<li>make</li>
		<li>cmake</li>
	</ul>
	</article>

	<article id="text-editors">
	<hr>
	<h3><i class="fa fa-align-left"></i> <?=$textEditors?></h3>
	<hr>
	<ul>
		<li>vim (vi)</li>
		<li>nano (pico)</li>
		<li>mcedit</li>
	</ul>
	</article>

	<article id="file-managers">
		<hr>
		<h3><i class="far fa-copy fa-fw"></i> <?=$fileManagers?></h3>
		<hr>
		<ul>
			<li>mc (midnight commander)</li>
			<li>ranger</li>
		</ul>
	</article>

	<article id="useful-programs">
	<hr>
	<h3><i class="far fa-window-maximize"></i> <?=$usefulPrograms?></h3>
	<hr>
	<ul>
		<li>lynx</li>
		<li>links</li>
		<li>elinks</li>
		<li>moc / mocp</li>
	</ul>
	</article>

	<article id="ncurses-programs">
	<hr>
	<h3><i class="far fa-window-maximize"></i> <?=$ncursesPrograms?></h3>
	<hr>
	<ul>
		<li>mc</li>
		<li>mcedit</li>
		<li>alsamixer</li>
	</ul>
	</article>

	<article id="x-server">
	<hr>
	<h3><i class="fa fa-desktop"></i> <?=$xServer?></h3>
	<hr>
	<ul>
		<li>xrandr</li>
		<li>xkill</li>
		<li>xterm</li>
		<li>startx</li>
		<li>xinit</li>
		<li>xlogo</li>
		<li>xcalc</li>
		<li>xeyes</li>
		<li>xman</li>
		<li>xclock</li>
		<li>xbiff</li>
	</ul>
	</article>

	<article id="bash-scripts">
	<hr>
	<h3><i class="fa fa-code"></i> <?=$bashScripts?></h3>
	<hr>
	<ul>
		<li>echo</li>
		<li>read</li>
		<li>sleep</li>
		<li>let</li>
		<li>test</li>
		<li>if</li>
		<li>elif</li>
		<li>else</li>
		<li>then</li>
		<li>fi</li>
		<li>case</li>
		<li>esac</li>
		<li>for</li>
		<li>select</li>
		<li>while</li>
		<li>until</li>
		<li>do</li>
		<li>done</li>
		<li>function</li>
	</ul>
	</article>

	<article id="ssh">
	<hr>
	<h3><i class="fas fa-tty"></i> telnet & ssh</h3>
	<hr>
	<ul>
		<li>telnet</li>
		<li>ssh</li>
	</ul>
	</article>

	<article id="wine">
	<hr>
	<h3><i class="fas fa-wine-glass-alt"></i> wine</h3>
	<hr>
	<ul>
		<li>wine</li>
		<li>wineconsole</li>
		<li>winecfg</li>
		<li>notepad</li>
	</ul>
	</article>

	<article id="xampp">
	<hr>
	<h3><i class="fab fa-php"></i> xampp</h3>
	<hr>
	<ul>
		<li>sudo /opt/lampp/lampp start</li>
		<li>sudo /opt/lampp/lampp stop</li>
		<li>sudo /opt/lampp/lampp reload</li>
		<li>sudo /opt/lampp/lampp restart</li>
	</ul>
	</article>

	<article id="git">
		<hr>
		<h3><i class="fab fa-git-alt"></i> git</h3>
		<hr>
		<h4>configuration</h4>
		<ul>
			<li>git config user.name</li>
			<li>git config user.email</li>
			<li>git config core.editor</li>
			<li>git config --global user.name ["Your Name"]</li>
			<li>git config --global user.email [you@example.com]</li>
			<li>git config --global core.editor [editor name]</li>
			<li>git config --list</li>
		</ul>
		<h4>get started with the repository</h4>
		<ul>
			<li>git clone [URL]</li>
			<li>git init</li>
		</ul>
		<h4>check changes</h4>
		<ul>
			<li>git status</li>
			<li>git status -s</li>
			<li>git diff</li>
		</ul>
		<h4>commit changes</h4>
		<ul>
			<li>git add [file name]</li>
			<li>git rm [file name]</li>
			<li>git commit -m "your message"</li>
		</ul>
		<h4>work with remote repositories</h4>
		<ul>
			<li>git remote -v</li>
			<li>git remote add origin [URL]</li>
			<li>git push</li>
			<li>git pull</li>
			<li>git fetch</li>
		</ul>
	</article>

</section>

<?php include "footer.php"; ?>
