## Table 1 - Original table

| staffNo | dentistName | patientNo | patient Name | appointment date time | surgeryNo |
|--------|--------|--------|--------|--------|--------|
| S1011 | Tony Smith | P100 | Gillian White | 12-Aug-03 10:00 | S10 |
| S1011 | Tony Smith | P105 | Jill Bell | 13-Aug-03 12:00 | S15 |
| S1024 | Helen Pearson | P108 | Ian MacKey | 12-Sept-03 10:00 | S10 |
| S1024 | Helen Pearson | P108 | Ian MacKey | 14-Sept-03 10:00 | S10 |
| S1032 | Robin Plevin | P105 | Jill Bell | 14-Oct-03 16:30 | S15 |
| S1032 | Robin Plevin | P110 | John Walker | 15-Oct-03 18:00 | S13 |

- Dentist info
- Patient info
- Appointment info (with staffNo and patientNo)

### Table 1.1 - Dentist info

| staffNo | dentistName |
|--------|--------|
| S1011 | Tony Smith |
| S1024 | Helen Pearson |
| S1032 | Robin Plevin |

### Table 1.2 - Patient info

| patientNo | patient Name |
|--------|--------|
| P100 | Gillian White |
| P105 | Jill Bell |
| P108 | Ian MacKey |
| P110 | John Walker |

### Table 1.3 - Appointment info

| staffNo | patientNo | appointment date time | surgeryNo |
|--------|--------|--------|--------|
| S1011 | P100 | 12-Aug-03 10:00 | S10 |
| S1011 | P105 | 13-Aug-03 12:00 | S15 |
| S1024 | P108 | 12-Sept-03 10:00 | S10 |
| S1024 | P108 | 14-Sept-03 10:00 | S10 |
| S1032 | P105 | 14-Oct-03 16:30 | S15 |
| S1032 | P110 | 15-Oct-03 18:00 | S13 |

---

## Table 2 - Original table 

| NIN | contractNo | hoursPerWeek | eName | hotelNo | hotelLocation |
|--------|--------|--------|--------|--------|--------|
| 113567WD | C1024 | 16 | John Smith | H25 | Edinburgh | 
| 234111XA | C1024 | 24 | Diane Hocine | H25 | Edinburgh |
| 712670YD | C1025 | 28 | Sarah White | H4 | Glasgow |
| 113567WD | C1025 | 16 | John Smith | H4 | Glasgow |

 - Hotel Info 
 - Employee Info
 - ContractNo 
 - Contract -> Employee

### Table 2.1 - Hotel Information

| hotelNo | hotelLocation |
|--------|--------|
| H25 | Edinburgh |
| H4 | Glasgow |

### Table 2.2 - Employee information

| NIN | eName |
|--------|--------|
| 113567WD | John Smith |
| 234111XA | Diane Hocine |
| 712670YD | Sarah White |

### Table 2.3 - Contact Information

| contractNo | hoursPerWeek |
|--------|--------|
| C1024 | 16 |
| C1024 | 24 |
| C1025 | 28 |
| C1025 | 16 |

### Table 2.4 - Contract -> Employee Information

| NIN | contractNo | hotelNo |
|--------|--------|--------|
| 113567WD | C1024 | H25 |
| 234111XA | C1024 | H25 |
| 712670YD | C1025 | H4 |
| 113567WD | C1025 | H4 |

---

## Table 3 - Original Table

| EMPLOYEE_ID | NAME | JOB_CODE | JOB | STATE_CODE | HOME_STATE |
|--------|--------|--------|--------|--------|--------|
| E001 | Alice | J01 | Chef | 26 | Michigan |
| E001 | Alice | J02 | Waiter | 26 | Michigan |
| E002 | Bob | J02 | Waiter | 56 | Wyoming |
| E002 | Bob | J03 | Bartender | 56 | Wyoming |
| E003 | Alice | J01 | Chef | 56 | Wyoming |

- Employee Info
- Job Info
- State Info
- Employee ID -> Job Code -> State Code

### Table 3.1 - Employee Info

| EMPLOYEE_ID | NAME |
|--------|--------|
| E001 | Alice |
| E002 | Bob |
| E003 | Alice |

### Table 3.2 - Job Info

| JOB_CODE | JOB |
|--------|--------|
| J01 | Chef |
| J02 | Waiter |
| J03 | Bartender |

### Table 3.3 - State Info

| STATE_CODE | HOME_STATE |
|--------|--------|
| 26 | Michigan |
| 56 | Wyoming |

### Table 3.4 - Employee ID -> Job Code -> State Code

| EMPLOYEE_ID | JOB_CODE | STATE_CODE |
|--------|--------|--------|
| E001 | J01 | 26 |
| E001 | J02 | 26 |
| E002 | J02 | 56 |
| E002 | J03 | 56 |
| E003 | J01 | 56 |

---

## Table 4 - Original Table

| Book | Genre | Author | Author Nationality | 
|--------|--------|--------|--------|
| Twenty Thousand Leagues Under The Sea | Science Fiction | Jules Verne | French|
| Journey to the Center of the Earth | Science Fiction | Jules Verne | French|
| Leaves of Grass | Poetry | Walt Whitman | American |
| Anna Karenina | Literary Fiction | Leo Tolstoy | Russian | 
| A Confession | Religious Autobiography | Leo Tolstoy | Russian |

 - Author Info 
 - Book Info
 - Author -> Book

 ### Table 4.1 - Author Info

| Author | Author Nationality |
|--------|--------|
| Jules Verne | French|
| Walt Whitman | American |
| Leo Tolstoy | Russian |

### Table 4.2 - Book Info

| Book | Genre |
|--------|--------|
| Twenty Thousand Leagues Under The Sea | Science Fiction |
| Journey to the Center of the Earth | Science Fiction |
| Leaves of Grass | Poetry |
| Anna Karenina | Literary Fiction |
| A Confession | Religious Autobiography |

### Table 4.3 - Author -> Book

| Author | Book |
|--------|--------|
| Twenty Thousand Leagues Under The Sea | Jules Verne |
| Journey to the Center of the Earth | Jules Verne |
| Leaves of Grass | Walt Whitman |
| Anna Karenina | Leo Tolstoy |
| A Confession | Leo Tolstoy |

---

## Table 5 - Original Table

| UnitID | StudentID | Date | TutorID | Topic | Room | Grade | Book | TutEmail |
|--------|--------|--------|--------|--------|--------|--------|--------|--------|
| U1 | St1 | 23.02.03 | Tut1 | GMT | 629 | 4.7 | Deumlich | tut1@fhbb.ch |
| U2 | St1 | 18.11.02 | Tut3 | GIn | 631 | 5.1 | Zehnder | tut3@fhbb.ch |
| U1 | St4 | 23.02.03 | Tut1 | GMT | 629 | 4.3 | Deumlich | tut1@fhbb.ch |
| U5 | St2 | 05.05.03 | Tut3 | PhF | 632 | 4.9 | Dummlers | tut3@fhbb.ch |
| U4 | St2 | 04.07.03 | Tut5 | AVQ | 621 | 5.0 | SwissTopo | tut5@fhbb.ch |

 - Tutor Info
 - unit info
 - student -> grade info
 - date -> topic info


### Table 5.1 - Tutor Info

| TutorID | Room | TutEmail |
|--------|--------|--------|
| Tut1 | 629 | tut1@fhbb.ch |
| Tut3 | 631 | tut3@fhbb.ch |
| Tut5 | 621 | tut5@fhbb.ch |

### Table 5.2 - Unit Info

| UnitID | TutorID | Topic | Book |
|--------|--------|--------|--------|
| U1 | Tut1 | GMT | Deumlich |
| U2 | Tut3 | GIn | Zehnder |
| U5 | Tut3 | PhF | Dummlers |
| U4 | Tut5 | AVQ |  SwissTopo |

### Table 5.3 - Grade Info

| UnitID | StudentID | Grade |
|--------|--------|--------|
| U1 | St1 | 4.7 |
| U2 | St1 | 5.1 |
| U1 | St4 | 4.3 |
| U5 | St2 | 4.9 |
| U4 | St2 | 5.0 |

### Table 5.4 - Date -> Topic Info

| UnitID | StudentID | Date |
|--------|--------|--------|
| U1 | St1 | 23.02.03 |
| U2 | St1 | 18.11.02 |
| U1 | St4 | 23.02.03 |
| U5 | St2 | 05.05.03 |
| U4 | St2 | 04.07.03 |

### OR VER 2

### Table 5.1 - Tutor Info

| TutorID | Room | TutEmail |
|--------|--------|--------|
| Tut1 | 629 | tut1@fhbb.ch |
| Tut3 | 631 | tut3@fhbb.ch |
| Tut5 | 621 | tut5@fhbb.ch |

### Table 5.2 - Student Info

StudentID | Date | TutorID | Grade | Book |
|--------|--------|--------|--------|--------|
| St1 | 23.02.03 | Tut1 | 4.7 | Deumlich |
| St1 | 18.11.02 | Tut3 |  5.1 | Zehnder |
| St4 | 23.02.03 | Tut1 |  4.3 | Deumlich |
| St2 | 05.05.03 | Tut3 | 4.9 | Dummlers |
| St2 | 04.07.03 | Tut5 | 5.0 | SwissTopo |

### Table 5.3 - Unit Info

| UnitID | Date | TutorID | Topic | Room |
|--------|--------|--------|--------|--------|
| U1 | 23.02.03 | Tut1 | GMT | 629 |
| U2 | 18.11.02 | Tut3 | GIn | 631 |
| U1 | 23.02.03 | Tut1 | GMT | 629 |
| U5 | 05.05.03 | Tut3 | PhF | 632 |
| U4 | 04.07.03 | Tut5 | AVQ | 621 |