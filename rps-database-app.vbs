Set WshShell = CreateObject("WScript.Shell")
WshShell.Run chr(34) & "C:\xampp\htdocs\database-rps\serve.bat" & Chr(34), 0
Set WshShell = Nothing
