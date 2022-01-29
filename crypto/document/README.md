# Document

## Description

I found this on the back of a famous US political document after putting some lemon juice on it.
What does it mean, who put it there?
What is the flag?

```
Zi vse Gehxzr rj vse Lnbbsq Vxceej, ig Wfqhv vz ffrf i abui rprwevb Ialsp, pskautwfk Nwdtzcx, qbfxvg oodelbwp Wvcyqlieqhl, svqgiue ywf gki ezmdog lsshrep, piofwhr wlg reeekiz Jhphlrv, gbosz{F0rue1tlt10g_0n_hu3_Xr1v3o_Sk4t3l} ibq viefrv tam Pyhwutnxs hn Zveitey ko hcffhpxps rnw wie Ssueeiimg, rb rvflie agl sfwedwijh mpwf Fspdtztnbwbq jqc tye Nvwghh Ueakel wt Npittcr.
```

Hint: The cipher is a Vigenere cipher.

## Solution
The first thing that stands out is the obvious brackets in the middle of the ciphertext,
but the flag format, which is `gigem{*}`, suggests to me that the message isn't a simple
substitution cipher, since `gbosz` from the ciphertext would map two characters to the letter `g`.
With no lead on what the encryption method could possibly be, I used this convenient tool
https://www.dcode.fr/cipher-identifier to figure out what type of cipher it is, a Vigenere cipher.
The Vigenere tool on that same site, https://www.dcode.fr/vigenere-cipher,
also automatically guesses the key, and gets us the flag!

`gigem{C0nst1tut10n_0f_th3_Un1t3d_St4t3s}`
