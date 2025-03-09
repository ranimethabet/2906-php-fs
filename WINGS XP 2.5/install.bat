regedit -s 172B6AFE.reg
@echo off
devcon remove root\multikey
devcon install multikey.inf root\multikey

copy WingsXP.exe "%ProgramFiles%\WingsXP2\"
copy WINGS.DLL "%ProgramFiles%\WingsXP2\"
copy wingsxp.prm "%ProgramFiles%\WingsXP2\"
copy AllWingsExt64.dll "%ProgramFiles%\WingsXP2\"
copy gdiplus.dll "%ProgramFiles%\WingsXP2\"