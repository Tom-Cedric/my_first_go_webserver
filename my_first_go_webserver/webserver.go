package main

import (
	"net/http"
	"fmt"
)

/*
 * @description: Is a Function to write "Hello from Server" on the Page.
 */

func sendMessageFromServer(w http.ResponseWriter, req *http.Request) {

	fmt.Fprintf(w, "Hello from Server!")

}

func main() {

	//http.HandleFunc("/page", sendMessageFromServer)

	//Here I load the html file out of the folder "page".
	http.Handle("/", http.FileServer(http.Dir("page")))

	//Here I start the Web server.
	http.ListenAndServe(":8080", nil)


}

