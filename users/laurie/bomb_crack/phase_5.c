#include <stdio.h>

// Dump of assembler code for function phase_5:
//    0x08048d2c <+0>:	push   ebp
//    0x08048d2d <+1>:	mov    ebp,esp
//    0x08048d2f <+3>:	sub    esp,0x10
//    0x08048d32 <+6>:	push   esi
//    0x08048d33 <+7>:	push   ebx
//    0x08048d34 <+8>:	mov    ebx,DWORD PTR [ebp+0x8]
//    0x08048d37 <+11>:	add    esp,0xfffffff4
//    0x08048d3a <+14>:	push   ebx
//    0x08048d3b <+15>:	call   0x8049018 <string_length>
//    0x08048d40 <+20>:	add    esp,0x10
//    0x08048d43 <+23>:	cmp    eax,0x6
//    0x08048d46 <+26>:	je     0x8048d4d <phase_5+33>
//    0x08048d48 <+28>:	call   0x80494fc <explode_bomb>
//    0x08048d4d <+33>:	xor    edx,edx
//    0x08048d4f <+35>:	lea    ecx,[ebp-0x8]
//    0x08048d52 <+38>:	mov    esi,0x804b220
//    0x08048d57 <+43>:	mov    al,BYTE PTR [edx+ebx*1]
//    0x08048d5a <+46>:	and    al,0xf
//    0x08048d5c <+48>:	movsx  eax,al
//    0x08048d5f <+51>:	mov    al,BYTE PTR [eax+esi*1]
//    0x08048d62 <+54>:	mov    BYTE PTR [edx+ecx*1],al
//    0x08048d65 <+57>:	inc    edx
//    0x08048d66 <+58>:	cmp    edx,0x5
//    0x08048d69 <+61>:	jle    0x8048d57 <phase_5+43>
//    0x08048d6b <+63>:	mov    BYTE PTR [ebp-0x2],0x0
//    0x08048d6f <+67>:	add    esp,0xfffffff8
//    0x08048d72 <+70>:	push   0x804980b
//    0x08048d77 <+75>:	lea    eax,[ebp-0x8]
//    0x08048d7a <+78>:	push   eax
//    0x08048d7b <+79>:	call   0x8049030 <strings_not_equal>
//    0x08048d80 <+84>:	add    esp,0x10
//    0x08048d83 <+87>:	test   eax,eax
//    0x08048d85 <+89>:	je     0x8048d8c <phase_5+96>
//    0x08048d87 <+91>:	call   0x80494fc <explode_bomb>
//    0x08048d8c <+96>:	lea    esp,[ebp-0x18]
//    0x08048d8f <+99>:	pop    ebx
//    0x08048d90 <+100>:	pop    esi
//    0x08048d91 <+101>:	mov    esp,ebp
//    0x08048d93 <+103>:	pop    ebp
//    0x08048d94 <+104>:	ret
// End of assembler dump.
// (gdb) x/s 0x804b220
// 0x804b220 <array.123>:	 "isrveawhobpnutfg\260\001"

// void phase_5(char *param_1)

// {
// 	int iVar1;
// 	char local_c[6];
// 	undefined local_6;

// 	iVar1 = string_length(param_1);
// 	if (iVar1 != 6)
// 	{
// 		explode_bomb();
// 	}
// 	iVar1 = 0;
// 	do
// 	{
			// (gdb) x/s 0x804b220
			// 0x804b220 <array.123>:	 "isrveawhobpnutfg\260\001"

// 		local_c[iVar1] = (&array.123)[(char)(param_1[iVar1] & 0xf)];
// 		iVar1 = iVar1 + 1;
// 	} while (iVar1 < 6);
// 	local_6 = 0;
// 	iVar1 = strings_not_equal(local_c, "giants");
// 	if (iVar1 != 0)
// 	{
// 		explode_bomb();
// 	}
// 	return;
// }

void get_all_possible()

{
	char local_c;
	int local_6;
	char tmp = 0;
	char test = 0;
	char *str = "isrveawhobpnutfg\260\001";
	while (test < 127)
	{
		if (test >= 'a' && test <= 'z') {
			tmp = test;
			local_c = str[tmp & 0xf];
			printf("str[%c & 0xf] => %c\n", test, local_c);
		}
		test++;
	}
	printf("\n");
}

void phase_5_crack()

{
	char local_c;
	char tmp = 0;
	char test = 0;
	char *str = "isrveawhobpnutfg\260\001";
	char *result = "giants";
	int i = 0;
	while (result[i]) {
		test = 0;
		tmp = 0;
		while (test < 127)
		{
			if (test >= 'a' && test <= 'z') {
				tmp = test;
				local_c = str[tmp & 0xf];
				// printf("phase_5 result str[%c & 0xf] => %c\n", test, local_c);		
			}
			if (result[i] == local_c) {
				printf("result[i] == %c | %c == str[ %c & 0xf ]\n", result[i], local_c, test);
				break;
			}
			test++;
		}
		i++;
	}
}

void test() {
	printf("TEST -> opekma\n");
	char *test = "opekma";
	char *str = "isrveawhobpnutfg\260\001";
	int i = 0;
	while (test[i]) {
		printf("%c", str[test[i] & 0xf]);
		i++;
	}
	printf("\n");
}

int main(int argc, char **argv) {
	printf("Phase_5 crack\n");
	get_all_possible();
	phase_5_crack();
	test();
	return 0;
}