FROM node:alpine

WORKDIR /usr/app
COPY ./ /usr/app

RUN npm install
RUN npm install express
RUN npm install ejs
CMD ["npm","start"]
