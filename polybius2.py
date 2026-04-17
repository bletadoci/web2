#pjesa jem
def encrypt(text):
    square = create_polybius_square()
    text = text.upper().replace("J", "I")
    result = []

    for char in text:
        if char in square:
            row, col = square[char]
            result.append(f"{row}{col}")
        elif char == " ":
            result.append(" ")

    return " ".join(result)


def decrypt(text):
    square = create_polybius_square()
    reverse_square = {v: k for k, v in square.items()}
    result = []

    words = text.split("  ")
    for word in words:
        pairs = word.strip().split(" ")
        for pair in pairs:
            if len(pair) == 2 and pair.isdigit():
                row, col = int(pair[0]), int(pair[1])
                if (row, col) in reverse_square:
                    result.append(reverse_square[(row, col)])
        result.append(" ")

    return "".join(result).strip()
