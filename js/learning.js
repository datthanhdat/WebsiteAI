function show1(){
    (async () => {
        const { value: question } = await Swal.fire({
        title: 'Viết lại cú pháp thẻ "head"',
        icon: 'question',
        input: 'text',
        inputOptions: {
            answer: '<head></head>',
        },
        inputPlaceholder: 'Viết cú pháp',
        showCancelButton: true,
        inputValidator: (value) => {
            return new Promise((resolve) => {
            if (value === '<head></head>') {
                resolve()
            } else {
                resolve('Sai cú pháp')
            }
            })
        }
        })

        if (question) {
        Swal.fire(`Đáp án đúng: ${question}`)
        }

        })()
}

function show2(){
    (async () => {
        const { value: question } = await Swal.fire({
        title: 'Viết lại cú pháp thẻ "html"',
        icon: 'question',
        input: 'text',
        inputOptions: {
            answer: '<html></html>',
        },
        inputPlaceholder: 'Viết cú pháp',
        showCancelButton: true,
        inputValidator: (value) => {
            return new Promise((resolve) => {
            if (value === '<html></html>') {
                resolve()
            } else {
                resolve('Sai cú pháp')
            }
            })
        }
        })

        if (question) {
        Swal.fire(`Đáp án đúng: ${question}`)
        }

        })()
}

function show3(){
    (async () => {
        const { value: question } = await Swal.fire({
        title: 'Viết lại cú pháp thẻ "body"',
        icon: 'question',
        input: 'text',
        inputOptions: {
            answer: '<body></body>',
        },
        inputPlaceholder: 'Viết cú pháp',
        showCancelButton: true,
        inputValidator: (value) => {
            return new Promise((resolve) => {
            if (value === '<body></body>') {
                resolve()
            } else {
                resolve('Sai cú pháp')
            }
            })
        }
        })

        if (question) {
        Swal.fire(`Đáp án đúng: ${question}`)
        }

        })()
}


    
function show4(){
    (async () => {
        const { value: question } = await Swal.fire({
        title: 'Có một khối vuông',
        icon: 'question',
        text: 'Cú pháp tạo nền màu đỏ cho khối vuông',
        input: 'text',
        inputOptions: {
            answer: 'background: red;',
        },
        inputPlaceholder: 'Viết cú pháp',
        showCancelButton: true,
        inputValidator: (value) => {
            return new Promise((resolve) => {
            if (value === 'background: red;') {
                resolve()
            } else {
                resolve('Sai cú pháp')
            }
            })
        }
        })

        if (question) {
        Swal.fire(`Đáp án đúng: ${question}`)
        }

        })()
}

function show5(){
    (async () => {
        const { value: question } = await Swal.fire({
        title: 'Viết cú pháp thẻ "img"',
        icon: 'question',
        text:'Nếu ảnh bị lỗi thì sẽ có dòng chữ thay thế ',
        input: 'text',
        inputOptions: {
            answer: '<img src="" alt="" />',
        },
        inputPlaceholder: 'Viết cú pháp',
        showCancelButton: true,
        inputValidator: (value) => {
            return new Promise((resolve) => {
            if (value === '<img src="" alt="" />') {
                resolve()
            } else {
                resolve('Sai cú pháp')
            }
            })
        }
        })

        if (question) {
        Swal.fire(`Đáp án đúng: ${question}`)
        }

        })()
}

function show6(){
    (async () => {
        const { value: question } = await Swal.fire({
        title: 'Có một đoạn văn bản',
        icon: 'question',
        text: 'Thêm thuộc tính để đoạn văn bản nằm giữa',
        input: 'text',
        inputOptions: {
            answer: 'text-align: center;',
        },
        inputPlaceholder: 'Viết cú pháp',
        showCancelButton: true,
        inputValidator: (value) => {
            return new Promise((resolve) => {
            if (value === 'text-align: center;') {
                resolve()
            } else {
                resolve('Sai cú pháp')
            }
            })
        }
        })

        if (question) {
        Swal.fire(`Đáp án đúng: ${question}`)
        }

        })()
}

function show7(){
    (async () => {
        const { value: question } = await Swal.fire({
        title: 'Có một khối vuông',
        icon: 'question',
        text: 'Tạo viền cho khối vuông(nét liền, 1px, màu đen )',
        input: 'text',
        inputOptions: {
            answer: 'border: solid 1px black;',
        },
        inputPlaceholder: 'Viết cú pháp',
        showCancelButton: true,
        inputValidator: (value) => {
            return new Promise((resolve) => {
            if (value === 'border: solid 1px black;') {
                resolve()
            } else {
                resolve('Sai cú pháp')
            }
            })
        }
        })

        if (question) {
        Swal.fire(`Đáp án đúng: ${question}`)
        }

        })()
}

function show8(){
    (async () => {
        const { value: question } = await Swal.fire({
        title: 'Có một đoạn văn bản',
        text: 'Viết cú pháp để chuyển màu đoạn văn bản(đỏ)',
        icon: 'question',
        input: 'text',
        inputOptions: {
            answer: 'color: red;',
        },
        inputPlaceholder: 'Viết cú pháp',
        showCancelButton: true,
        inputValidator: (value) => {
            return new Promise((resolve) => {
            if (value === 'color: red;') {
                resolve()
            } else {
                resolve('Sai cú pháp')
            }
            })
        }
        })

        if (question) {
        Swal.fire(`Đáp án đúng: ${question}`)
        }

        })()
}

function show9(){
    (async () => {
        const { value: question } = await Swal.fire({
        title: 'Có một khối vuông',
        text: 'viết thuộc tính để bo tròn khối vuông(15px)',
        icon: 'question',
        input: 'text',
        inputOptions: {
            answer: 'border-radius: 15px;',
        },
        inputPlaceholder: 'Viết cú pháp',
        showCancelButton: true,
        inputValidator: (value) => {
            return new Promise((resolve) => {
            if (value === 'border-radius: 15px;') {
                resolve()
            } else {
                resolve('Sai cú pháp')
            }
            })
        }
        })

        if (question) {
        Swal.fire(`Đáp án đúng: ${question}`)
        }

        })()

}