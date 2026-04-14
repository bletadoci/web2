def create_polybius_square():
    square = {}
    alphabet = "ABCDEFGHIKLMNOPQRSTUVWXYZ"  # J is combined with I
    for index, letter in enumerate(alphabet):
        row = (index // 5) + 1
        col = (index % 5) + 1
        square[letter] = (row, col)
    return square


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

    words = text.split("  ")  # double space separates words
    for word in words:
        pairs = word.strip().split(" ")
        for pair in pairs:
            if len(pair) == 2 and pair.isdigit():
                row, col = int(pair[0]), int(pair[1])
                if (row, col) in reverse_square:
                    result.append(reverse_square[(row, col)])
        result.append(" ")

    return "".join(result).strip()


def print_square():
    print("\nPolybius Square:")
    print("    1  2  3  4  5")
    alphabet = "ABCDEFGHIKLMNOPQRSTUVWXYZ"
    for i in range(5):
        row_letters = alphabet[i * 5:(i + 1) * 5]
        print(f"{i + 1}   {'  '.join(row_letters)}")
    print()


def main():
    print("=" * 40)
    print("     Polybius Square Cipher")
    print("=" * 40)
    print_square()

    while True:
        print("\nOptions:")
        print("1. Encrypt")
        print("2. Decrypt")
        print("3. Exit")

        choice = input("\nChoose an option (1/2/3): ").strip()

        if choice == "1":
            text = input("Enter text to encrypt: ")
            encrypted = encrypt(text)
            print(f"Encrypted: {encrypted}")

        elif choice == "2":
            text = input("Enter text to decrypt (pairs separated by spaces, double space between words): ")
            decrypted = decrypt(text)
            print(f"Decrypted: {decrypted}")

        elif choice == "3":
            print("Goodbye!")
            break

        else:
            print("Invalid option. Please choose 1, 2, or 3.")


if __name__ == "__main__":
    main()