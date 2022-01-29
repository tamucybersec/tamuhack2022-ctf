# Ahoy

## Description
Chips Ahoy! Everything you need is located on the [webpage](http://localhost:8000/) (http://localhost:8000/).

(Setup instructions are in Setup.txt)

## Solution

cookie modification chall; we're told to set `user` to the base64 decoded representation of `YWRtaW5pc3RyYXRvcg==` immediately on viewing the page. this decodes to "administrator". basic recon (or inference from the name lol) shows that there is a cookie, user=string. setting it to administrator yields the flag. `gigem{c00kiesC00kiesYummyYum}`

## Developer Notes
Run `make` to start up the container on port 80. For cleanup, run `make stop`.
