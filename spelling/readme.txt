How to get pspell to work:
1) upload and install Aspell-0-50-3-3-Setup.exe from official site:
http://aspell.net/win32/
alternative link:
ftp://192.168.3.251/pub/aspell/

2) upload dictionary from here:
ftp://ftp.lyx.org/pub/lyx/contrib/aspell6-windows/
alternative link:
ftp://192.168.3.251/pub/aspell/

3) install dictionary, using path "path-to-aspell/dict/"

4) find into C:/Documents and Settings files by regexp: *.cset
Copy found directory into "path-to-aspepp/data"

5) include extension in php.ini

6) copy aspell-15.dll if necessary into c:/windows/system32/