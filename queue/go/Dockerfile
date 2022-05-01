FROM golang:1.17.1-alpine3.14
RUN mkdir /app
ADD ./app /app/
WORKDIR /app
RUN go mod init app
RUN go build -o /app
CMD ["./app"]