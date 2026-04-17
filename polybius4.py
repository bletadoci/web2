#pjesa e blertit
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
