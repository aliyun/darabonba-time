package client

import (
	"testing"
	"time"

	"github.com/alibabacloud-go/tea/tea"
	"github.com/alibabacloud-go/tea/utils"
)

func Test_Format(t *testing.T) {
	a := Format(tea.String("yyyyMMdd hh:mm a EEEE"))
	utils.AssertEqual(t, tea.StringValue(a), time.Now().UTC().Format("20060102 15:04 PM Monday"))
}
